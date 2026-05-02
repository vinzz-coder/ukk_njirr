<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Money Tracker</title>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background: #f4f7f6;
            font-family: 'Poppins', sans-serif;
        }

        .login-wrapper {
            background: radial-gradient(circle at top right, #e0e7ff 0%, #f4f7f6 50%);
            min-height: 100vh;
        }

        .card-login {
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.08);
            overflow: hidden;
        }

        .card-header-accent {
            background: #3b82f6;
            height: 6px;
        }

        .form-label {
            color: #475569;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        .btn-login {
            background: #3b82f6;
            color: white;
            border: none;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
            color: white;
        }

        .login-icon {
            width: 60px;
            height: 60px;
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            margin: 0 auto 20px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>

<div class="login-wrapper d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">

                <div class="card card-login">
                    <div class="card-header-accent"></div>
                    <div class="card-body p-4 p-md-5">

                        <!-- HEADER -->
                        <div class="text-center mb-4">
                            <div class="login-icon">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h3 class="fw-bold text-dark mb-1">Masuk</h3>
                            <p class="text-muted small">Silakan login ke akun Anda</p>
                        </div>

                        <!-- ALERT ERROR / SUCCESS -->
                        @if(session('error'))
                            <div class="alert alert-danger border-0 py-2 small d-flex align-items-center" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                {{ session('error') }}
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success border-0 py-2 small d-flex align-items-center" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- FORM -->
                        <form method="POST" action="/login">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
                                    <input type="text" name="username" class="form-control border-start-0 rounded-end-3" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-bold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-key"></i></span>
                                    <input type="password" name="password" class="form-control border-start-0 rounded-end-3" placeholder="Password" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-login w-100 rounded-pill">
                                Sign In <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </form>

                        <!-- REGISTER LINK -->
                        <div class="text-center mt-4">
                            <p class="small text-muted mb-1">Belum punya akun?</p>
                            <a href="/register" class="text-primary fw-bold text-decoration-none small">
                                Buat Akun Baru <i class="bi bi-person-plus-fill ms-1"></i>
                            </a>
                        </div>

                        <!-- BACK TO HOME -->
                        <div class="text-center mt-3">
                            <a href="/" class="text-decoration-none text-muted small">
                                <i class="bi bi-house-door me-1"></i> Kembali ke Beranda
                            </a>
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->
                <p class="text-center text-muted small mt-4">
                    &copy; 2026 <strong>Money Tracker</strong>. All rights reserved.
                </p>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
