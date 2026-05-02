<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

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

        /* --- NAVBAR STYLING --- */
        .navbar-custom {
            background: #0f172a; /* Warna gelap yang sama dengan sidebar */
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand-custom {
            color: #ffffff !important;
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 0.5px;
        }

        .navbar-brand-custom span {
            color: #3b82f6; /* Aksen biru */
        }

        /* Tombol Kelola Transaksi */
        .btn-manage {
            background: #3b82f6;
            color: white;
            border: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-manage:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
        }

        /* Tombol Logout */
        .btn-logout-custom {
            background: rgba(251, 113, 133, 0.1);
            color: #fb7185;
            border: 1px solid rgba(251, 113, 133, 0.2);
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-logout-custom:hover {
            background: #f43f5e;
            color: white;
            border-color: #f43f5e;
        }

        /* Container untuk Konten Utama */
        .main-content {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand navbar-brand-custom" href="#">
            <i class="bi bi-grid-fill me-2"></i>Dashboard<span>.</span>
        </a>

        <div class="ms-auto d-flex align-items-center gap-3">
            <!-- Link Kelola Transaksi -->
            <a href="/user" class="btn btn-manage btn-sm rounded-pill px-4 py-2 d-flex align-items-center">
                <i class="bi bi-arrow-left-right me-2"></i> Kelola Transaksi
            </a>

            <!-- Link Logout -->
            <a href="/logout" class="btn btn-logout-custom btn-sm rounded-pill px-4 py-2 d-flex align-items-center">
                <i class="bi bi-box-arrow-left me-2"></i> Logout
            </a>
        </div>

    </div>
</nav>

<!-- MAIN CONTENT AREA -->
<main class="container main-content">
    @yield('content')
</main>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
