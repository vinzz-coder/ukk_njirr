@extends('layouts.app') {{-- Sesuaikan dengan layout utama kamu --}}

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card border-0 shadow-sm rounded-4 p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-4">
            <div class="bg-primary-subtle d-inline-block p-3 rounded-circle mb-3">
                <i class="bi bi-person-plus text-primary fs-3"></i>
            </div>
            <h3 class="fw-bold mb-1">Daftar Akun</h3>
            <p class="text-muted small">Buat akun untuk mulai mengelola keuangan</p>
        </div>

        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label small fw-bold">Username</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                    <input type="text" name="username" class="form-control bg-light border-start-0 @error('username') is-invalid @enderror" placeholder="Username baru" required>
                </div>
                @error('username') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="form-label small fw-bold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-key text-muted"></i></span>
                    <input type="password" name="password" class="form-control bg-light border-start-0 @error('password') is-invalid @enderror" placeholder="Password minimal 6 karakter" required>
                </div>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold">
                Daftar Sekarang <i class="bi bi-arrow-right ms-1"></i>
            </button>
        </form>

        <div class="text-center mt-4">
            <p class="small text-muted">Sudah punya akun? <a href="/login" class="text-primary fw-bold text-decoration-none">Masuk di sini</a></p>
            <a href="/" class="text-muted small text-decoration-none"><i class="bi bi-house me-1"></i> Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
