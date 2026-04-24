<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;

// landing
Route::get('/', fn() => view('landing'));

// login
Route::get('/login', fn() => view('login'));

Route::post('/login', function (Request $r) {
    if ($r->username == 'admin' && $r->password == 'admin#1234') {
        session(['login' => true]);
        return redirect('/dashboard');
    }
    return back()->with('error', 'Login gagal');
});

Route::get('/logout', function () {
    session()->forget('login');
    return redirect('/');
});

// setelah login
Route::get('/dashboard', [TransaksiController::class, 'dashboard']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('/transaksi/hapus/{id}', [TransaksiController::class, 'destroy']);
