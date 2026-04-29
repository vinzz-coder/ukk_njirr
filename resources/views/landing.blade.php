<!DOCTYPE html>
<html>
<head>
    <title>Money Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-warning-subtle shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-dark" href="#">XennTracker</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item"><a href="#home" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#fitur" class="nav-link">Fitur</a></li>
                <li class="nav-item"><a href="#cara" class="nav-link">Cara Kerja</a></li>
                <li class="nav-item"><a href="#testi" class="nav-link">Testimoni</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <li class="nav-item ms-2">
                    <a href="/login" class="btn btn-dark rounded-pill px-3">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <h1 class="fw-bold display-5">
                    Kelola Keuangan <span class="text-warning">Tanpa Ribet</span>
                </h1>
                <p class="text-muted">
                    Catat pemasukan, pengeluaran, dan pantau saldo secara otomatis dalam satu dashboard sederhana.
                </p>

                <div class="d-flex gap-2 mt-3">
                    <a href="/login" class="btn btn-warning px-4">Mulai Sekarang</a>
                    <a href="#fitur" class="btn btn-outline-dark px-4">Lihat Fitur</a>
                </div>

                <!-- STATS -->
                <div class="row mt-4 text-center">
                    <div class="col-4">
                        <h5 class="fw-bold">10K+</h5>
                        <small class="text-muted">User</small>
                    </div>
                    <div class="col-4">
                        <h5 class="fw-bold">50K+</h5>
                        <small class="text-muted">Transaksi</small>
                    </div>
                    <div class="col-4">
                        <h5 class="fw-bold">99%</h5>
                        <small class="text-muted">Kepuasan</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 p-4 text-center">
                    <h6 class="text-muted">Total Saldo</h6>
                    <h2 class="fw-bold text-success">Rp 1.250.000</h2>
                    <p class="text-muted mb-0">Preview dashboard</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FITUR -->
<section id="fitur" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Fitur Utama</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <h5>Pencatatan Cepat</h5>
                    <p class="text-muted small">Input transaksi hanya beberapa detik.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <h5>Saldo Otomatis</h5>
                    <p class="text-muted small">Langsung terhitung tanpa ribet.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <h5>Laporan Keuangan</h5>
                    <p class="text-muted small">Pantau kondisi keuangan kamu.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CARA KERJA -->
<section id="cara" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Cara Kerja</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <h1 class="text-warning">1</h1>
                    <h5>Daftar</h5>
                    <p class="text-muted small">Buat akun dalam hitungan detik.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <h1 class="text-warning">2</h1>
                    <h5>Input Transaksi</h5>
                    <p class="text-muted small">Catat pemasukan & pengeluaran.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <h1 class="text-warning">3</h1>
                    <h5>Pantau</h5>
                    <p class="text-muted small">Lihat saldo & laporan.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONI -->
<section id="testi" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Apa Kata Mereka?</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <p>"Simple dan sangat membantu!"</p>
                    <small class="text-muted">- Rizky</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <p>"Sekarang keuangan lebih terkontrol."</p>
                    <small class="text-muted">- Dewi</small>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-3">
                    <p>"UI nya clean dan gampang dipakai."</p>
                    <small class="text-muted">- Andi</small>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5 bg-warning text-center">
    <div class="container">
        <h3 class="fw-bold">Siap Mengatur Keuanganmu?</h3>
        <a href="/login" class="btn btn-dark mt-3 px-4">Mulai Sekarang</a>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact</h2>

        <div class="row g-4">

            <div class="col-md-6">
                <p>Email: admin@email.com</p>
                <p>WA: 08123456789</p>
            </div>

            <div class="col-md-6">
                <form>
                    <input class="form-control mb-2" placeholder="Nama">
                    <input class="form-control mb-2" placeholder="Email">
                    <textarea class="form-control mb-2"></textarea>
                    <button class="btn btn-warning w-100">Kirim</button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2026 XennTracker</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
