<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('landing.index'));

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', fn() => view('login'));

Route::post('/login', function (Request $r) {

    $pengguna = Pengguna::where('username', $r->username)->first();

    if (!$pengguna || !Hash::check($r->password, $pengguna->password)) {
        return back()->with('error', 'Login gagal');
    }

    $role = $pengguna->role ?? 'pengguna';

    session([
        'login' => true,
        'pengguna_id' => $pengguna->id,
        'role' => $role,
    ]);

    return $role === 'admin'
        ? redirect('/admin')
        : redirect('/dashboard');
});

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/
Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD PENGGUNA
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    if (!session('login')) return redirect('/login');

    $role = session('role');
    if ($role !== 'pengguna') {
        if ($role === 'admin') {
            return redirect('/admin');
        }
        session()->flush();
        return redirect('/login');
    }

    return app(TransaksiController::class)->dashboard();
});

/*
|--------------------------------------------------------------------------
| TRANSAKSI (PENGGUNA)
|--------------------------------------------------------------------------
*/
Route::get('/user', function () {
    if (!session('login')) return redirect('/login');
    if (session('role') != 'pengguna') return redirect('/admin');

    return app(TransaksiController::class)->index();
});

Route::post('/user', function (Request $r) {
    if (!session('login')) return redirect('/login');
    if (session('role') != 'pengguna') return redirect('/admin');

    return app(TransaksiController::class)->store($r);
});

Route::get('/user/edit/{id}', function ($id) {
    if (!session('login')) return redirect('/login');
    if (session('role') != 'pengguna') return redirect('/admin');

    return app(TransaksiController::class)->edit($id);
});

Route::post('/user/update/{id}', function (Request $r, $id) {
    if (!session('login')) return redirect('/login');
    if (session('role') != 'pengguna') return redirect('/admin');

    return app(TransaksiController::class)->update($r, $id);
});

Route::get('/user/hapus/{id}', function ($id) {
    if (!session('login')) return redirect('/login');
    if (session('role') != 'pengguna') return redirect('/admin');

    return app(TransaksiController::class)->destroy($id);
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin', function () {
    if (!session('login')) return redirect('/login');

    $role = session('role');
    if ($role !== 'admin') {
        if ($role === 'pengguna') {
            return redirect('/dashboard');
        }
        session()->flush();
        return redirect('/login');
    }

    return app(AdminController::class)->dashboard();
});
Route::get('/admin/transaksi', [AdminController::class, 'transaksi']);
use App\Http\Controllers\AuthController; // Pastikan nama controller sesuai

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
