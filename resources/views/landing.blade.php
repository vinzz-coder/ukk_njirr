<!DOCTYPE html>
<html>
<head>
    <title>Money Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">XennTracker</a>

        <!-- TOGGLE MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a href="#home" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#fitur" class="nav-link">Fitur</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a href="/login" class="btn btn-dark w-100">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section id="home" class="py-5">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">

            <div class="col-lg-6">
                <h1 class="fw-bold">Kelola Keuangan Tanpa Ribet</h1>
                <p class="text-muted">
                    Catat pemasukan dan pengeluaran harian dengan cepat,
                    pantau saldo secara otomatis, dan kendalikan keuanganmu lebih baik.
                </p>

                <div class="d-flex flex-column flex-sm-row gap-2">
                    <a href="/login" class="btn btn-warning">Mulai Sekarang</a>
                    <a href="#fitur" class="btn btn-outline-dark">Lihat Fitur</a>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card shadow text-center p-4">
                    <h5>Preview Saldo</h5>
                    <h2 class="fw-bold text-success">Rp 1.250.000</h2>
                    <p class="text-muted">Simulasi tampilan dashboard</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FITUR -->
<section id="fitur" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Fitur Utama</h2>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5>Pencatatan Cepat</h5>
                        <p>Input data pemasukan dan pengeluaran hanya dalam beberapa klik tanpa proses rumit.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5>Saldo Otomatis</h5>
                        <p>Sistem langsung menghitung saldo berdasarkan transaksi yang kamu input.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5>Riwayat Lengkap</h5>
                        <p>Semua transaksi tersimpan rapi dan bisa dilihat kapan saja.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5>Manajemen Harian</h5>
                        <p>Cocok untuk mengontrol pengeluaran harian agar tidak berlebihan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5>Tampilan Sederhana</h5>
                        <p>UI clean dan mudah dipahami bahkan untuk pengguna baru.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5>Akses Cepat</h5>
                        <p>Bisa digunakan di berbagai perangkat: laptop, tablet, dan smartphone.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TENTANG -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h2>Tentang Aplikasi</h2>
                <p>
                    Money Tracker adalah aplikasi berbasis web yang dirancang untuk membantu
                    pengguna mencatat dan mengelola keuangan secara sederhana.
                </p>
                <p>
                    Dengan fitur yang mudah digunakan, aplikasi ini sangat cocok untuk pelajar,
                    mahasiswa, maupun pengguna umum yang ingin mulai mengatur keuangan pribadi.
                </p>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card shadow p-3">
                    <h5>Kenapa Harus Pakai Ini?</h5>
                    <ul>
                        <li>Mudah digunakan</li>
                        <li>Tidak ribet</li>
                        <li>Cepat dan efisien</li>
                        <li>Cocok untuk pemula</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Hubungi Kami</h2>

        <div class="row">

            <div class="col-lg-6 mb-4">
                <h5>Informasi Kontak</h5>
                <p>Email: admin@email.com</p>
                <p>WhatsApp: 08123456789</p>
                <p>Alamat: Indonesia</p>
            </div>

            <div class="col-lg-6">
                <h5>Kirim Pesan</h5>
                <form>
                    <input type="text" class="form-control mb-2" placeholder="Nama">
                    <input type="email" class="form-control mb-2" placeholder="Email">
                    <textarea class="form-control mb-2" rows="4" placeholder="Pesan"></textarea>
                    <button class="btn btn-warning w-100">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-warning text-center py-3">
    <p class="mb-0">© 2026 Money Tracker | All Rights Reserved</p>
</footer>

<!-- Bootstrap JS (BIAR RESPONSIVE NAVBAR NYALA) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
