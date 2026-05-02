<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

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
            margin: 0;
        }

        /* --- SIDEBAR STYLING --- */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #0f172a; /* Warna Slate Gelap */
            color: white;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .sidebar-header h4 {
            font-weight: 700;
            margin: 0;
            font-size: 1.25rem;
        }

        .nav-menu {
            flex-grow: 1;
            padding: 20px 15px;
            overflow-y: auto;
        }

        /* Styling Link Navigasi */
        .nav-link {
            color: #94a3b8 !important; /* Warna abu-abu soft */
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none !important;
        }

        .nav-link i {
            font-size: 1.2rem;
            margin-right: 12px;
            width: 25px;
            text-align: center;
        }

        /* Hover Effect */
        .nav-link:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff !important;
            transform: translateX(5px);
        }

        /* Tombol Aktif Otomatis */
        .nav-link.active {
            background: #3b82f6 !important; /* Biru terang */
            color: #ffffff !important;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
        }

        .sidebar-footer {
            padding: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .logout-btn {
            color: #fb7185 !important; /* Warna merah muda/rose */
        }

        .logout-btn:hover {
            background: rgba(251, 113, 133, 0.1);
            color: #f43f5e !important;
        }

        /* --- CONTENT STYLING --- */
        .content {
            margin-left: 260px;
            padding: 30px;
            transition: all 0.3s;
        }

        @media (max-width: 768px) {
            .sidebar { margin-left: -260px; }
            .content { margin-left: 0; }
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-header text-center text-md-start">
        <h4 class="text-white">
            <i class="bi bi-shield-lock-fill text-primary me-2"></i>Admin<span class="text-primary">Panel</span>
        </h4>
    </div>

    <div class="nav-menu">
        <p class="text-uppercase text-muted small fw-bold mb-3 px-2" style="font-size: 0.7rem; letter-spacing: 1px;">Main Navigation</p>

        <!-- Link Dashboard -->
        <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <!-- Link Transaksi (Aktif jika URL mengandung 'admin/transaksi') -->
        <a href="/admin/transaksi" class="nav-link {{ request()->is('admin/transaksi*') ? 'active' : '' }}">
            <i class="bi bi-wallet2"></i> Transaksi
        </a>

        <!-- Kamu bisa tambah menu lain di sini -->
    </div>

    <!-- Tombol Logout -->
    <div class="sidebar-footer">
        <a href="/logout" class="nav-link logout-btn">
            <i class="bi bi-box-arrow-left"></i> Logout
        </a>
    </div>
</div>

<!-- CONTENT AREA -->
<div class="content">
    <div class="container-fluid">
        <!-- Area isi konten Laravel -->
        @yield('content')
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
