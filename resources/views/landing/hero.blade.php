<section class="hero-section py-5 overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- TEKS HERO -->
            <div class="col-lg-6 text-center text-lg-start">
                <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3 fw-semibold">
                    <i class="bi bi-rocket-takeoff-fill me-1"></i> Aplikasi Keuangan No. 1
                </div>

                <h1 class="fw-bold display-4 leading-tight">
                    Kelola Keuangan <br>
                    <span class="text-gradient">Lebih Cerdas & Mudah</span>
                </h1>

                <p class="text-muted mt-3 fs-5">
                    Catat pemasukan, pengeluaran, dan pantau kesehatan finansial Anda secara otomatis dalam satu dashboard yang elegan.
                </p>

                <div class="d-flex gap-3 mt-4 justify-content-center justify-content-lg-start">
                    <a href="/login" class="btn btn-primary-hero rounded-pill px-4 py-3 fw-bold shadow-lg">
                        Mulai Gratis <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#fitur" class="btn btn-outline-custom rounded-pill px-4 py-3 fw-bold">
                        Lihat Fitur
                    </a>
                </div>
            </div>

            <!-- PREVIEW DASHBOARD CARD -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <!-- Dekorasi Lingkaran di Belakang -->
                    <div class="position-absolute top-50 start-50 translate-middle bg-primary opacity-10 rounded-circle" style="width: 400px; height: 400px; filter: blur(50px);"></div>

                    <div class="card hero-card border-0 shadow-2xl rounded-4 p-4 position-relative">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h6 class="text-muted mb-1 small fw-bold text-uppercase">Total Saldo</h6>
                                <h2 class="text-dark-blue fw-bold m-0">Rp 1.250.000</h2>
                            </div>
                            <div class="bg-light p-3 rounded-3">
                                <i class="bi bi-wallet2 text-primary fs-3"></i>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-6">
                                <div class="p-3 bg-success bg-opacity-10 rounded-3 border-start border-success border-4">
                                    <span class="text-muted small d-block">Pemasukan</span>
                                    <b class="text-success fs-5">+2.000.000</b>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-danger bg-opacity-10 rounded-3 border-start border-danger border-4">
                                    <span class="text-muted small d-block">Pengeluaran</span>
                                    <b class="text-danger fs-5">-750.000</b>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary rounded-circle p-1 me-2" style="width: 8px; height: 8px;"></div>
                                    <span class="small text-muted">Aktivitas Terakhir</span>
                                </div>
                                <span class="small fw-bold">Hari Ini</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Gradient Text */
    .text-gradient {
        background: linear-gradient(90deg, #3b82f6, #2563eb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-dark-blue {
        color: #0f172a;
    }

    /* Tombol Utama */
    .btn-primary-hero {
        background: #3b82f6;
        color: white;
        border: none;
        transition: all 0.3s;
    }
    .btn-primary-hero:hover {
        background: #2563eb;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.4) !important;
        color: white;
    }

    /* Tombol Outline */
    .btn-outline-custom {
        border: 2px solid #e2e8f0;
        color: #0f172a;
        transition: all 0.3s;
    }
    .btn-outline-custom:hover {
        background: #f8fafc;
        border-color: #0f172a;
    }

    /* Kartu Preview */
    .hero-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        transform: rotate(2deg); /* Sedikit miring untuk kesan artistik */
        transition: all 0.5s ease;
    }
    .hero-card:hover {
        transform: rotate(0deg) scale(1.02);
    }

    .shadow-2xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }
</style>
