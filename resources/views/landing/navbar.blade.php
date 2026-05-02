<nav class="navbar navbar-expand-lg sticky-top navbar-light">
    <div class="container py-2">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/" style="font-size: 1.5rem; letter-spacing: -0.5px;">
            <div class="bg-primary rounded-3 d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                <i class="bi bi-currency-exchange text-white fs-5"></i>
            </div>
            <span style="color: #0f172a;">Xenn</span><span class="text-primary">Tracker</span>
        </a>

        <!-- BUTTON LOGIN -->
        <div class="ms-auto">
            <a href="/login" class="btn btn-login-nav rounded-pill px-4 fw-semibold transition-all">
                Login <i class="bi bi-arrow-right-short ms-1"></i>
            </a>
        </div>

    </div>
</nav>

<style>
    /* Styling khusus Navbar Landing */
    .navbar {
        background: rgba(255, 255, 255, 0.8) !important;
        backdrop-filter: blur(15px); /* Efek blur kaca */
        -webkit-backdrop-filter: blur(15px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .btn-login-nav {
        background: #0f172a; /* Warna dark blue konsisten */
        color: white;
        border: none;
        padding: 10px 25px;
        box-shadow: 0 4px 10px rgba(15, 23, 42, 0.15);
    }

    .btn-login-nav:hover {
        background: #3b82f6; /* Berubah ke biru saat hover */
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(59, 130, 246, 0.3);
    }

    .navbar-brand:hover {
        opacity: 0.8;
    }

    /* Animasi halus untuk transisi */
    .transition-all {
        transition: all 0.3s ease;
    }
</style>
