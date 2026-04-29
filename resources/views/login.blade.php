<!DOCTYPE html>
<html>
<head>
    <title>Login - Money Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body p-4">

                    <!-- HEADER -->
                    <div class="text-center mb-4">
                        <h3 class="fw-bold mb-1">Selamat Datang</h3>
                        <p class="text-muted small">Login untuk melanjutkan</p>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger py-2 small">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Username</label>
                            <input type="text" name="username" class="form-control rounded-3" placeholder="Masukkan username">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Password</label>
                            <input type="password" name="password" class="form-control rounded-3" placeholder="Masukkan password">
                        </div>

                        <button class="btn btn-warning w-100 py-2 fw-semibold shadow-sm">
                            Login
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <a href="/" class="text-decoration-none text-muted small">
                            ← Kembali ke Landing Page
                        </a>
                    </div>

                </div>

            </div>

            <!-- OPTIONAL SMALL FOOTNOTE -->
            <p class="text-center text-muted small mt-3 mb-0">
                © 2026 Money Tracker
            </p>

        </div>

    </div>
</div>

</body>
</html>
