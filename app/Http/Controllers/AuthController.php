<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // TAMBAHKAN FUNCTION INI
    public function showLogin()
    {
        return view('login'); // Sesuaikan dengan nama file di resources/views/login.blade.php
    }

    public function showRegister()
    {
        return view('auth.register'); // Sesuaikan folder view register kamu
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Pengguna::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'login' => true,
                'pengguna_id' => $user->id,
                'username' => $user->username,
                'role' => $user->role
            ]);

            // Redirect berdasarkan role
            return ($user->role === 'admin')
                ? redirect('/admin')
                : redirect('/dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:pengguna,username|min:4',
            'password' => 'required|min:6'
        ]);

        Pengguna::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'pengguna'
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat!');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
