<section id="preview" class="py-5" style="background-color: #f8fafc;">
    <div class="container py-lg-5">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6 text-dark-blue">Tampilan Antarmuka <span class="text-primary">Modern</span></h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Didesain khusus untuk memberikan pengalaman pengelolaan keuangan yang paling nyaman bagi Anda.</p>
        </div>

        <div class="row g-4 align-items-center">

            <!-- PREVIEW KIRI: STATS & LIST -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="fw-bold m-0 text-dark-blue">Grafik Pengeluaran</h6>
                            <span class="badge bg-primary bg-opacity-10 text-primary small">Minggu Ini</span>
                        </div>

                        <!-- Visual Dummy Chart -->
                        <div class="d-flex align-items-end gap-2 mb-4" style="height: 150px;">
                            <div class="bg-primary opacity-25 rounded-top w-100" style="height: 40%;"></div>
                            <div class="bg-primary opacity-50 rounded-top w-100" style="height: 70%;"></div>
                            <div class="bg-primary rounded-top w-100" style="height: 100%;"></div>
                            <div class="bg-primary opacity-50 rounded-top w-100" style="height: 60%;"></div>
                            <div class="bg-primary opacity-25 rounded-top w-100" style="height: 30%;"></div>
                        </div>

                        <p class="text-muted small m-0">Analisis pengeluaran harian Anda diproses secara otomatis menjadi grafik yang mudah dipahami.</p>
                    </div>
                </div>

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 text-success p-3 rounded-3 me-3">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark-blue">Saldo Harian</h6>
                            <p class="text-muted small m-0">Keamanan data saldo yang selalu update real-time setiap detik transaksi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PREVIEW KANAN: MOCKUP DASHBOARD UTAMA -->
            <div class="col-lg-7">
                <div class="preview-mockup-wrapper">
                    <div class="card border-0 shadow-2xl rounded-4 overflow-hidden">
                        <!-- Toolbar Mac-style -->
                        <div class="bg-light px-3 py-2 d-flex gap-1 border-bottom">
                            <div class="rounded-circle bg-danger opacity-50" style="width: 10px; height: 10px;"></div>
                            <div class="rounded-circle bg-warning opacity-50" style="width: 10px; height: 10px;"></div>
                            <div class="rounded-circle bg-success opacity-50" style="width: 10px; height: 10px;"></div>
                        </div>
                        <div class="card-body p-0 bg-white">
                            <div class="p-4 bg-primary bg-opacity-10">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <small class="text-primary fw-bold">Selamat Datang Kembali!</small>
                                        <h4 class="fw-bold text-dark-blue mb-0">Dashboard Anda</h4>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="bg-white rounded-pill px-3 py-1 shadow-sm d-inline-block small">
                                            <i class="bi bi-calendar3 text-primary me-1"></i> Apr 2026
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="bg-light rounded-3 p-3 mb-3 border-start border-primary border-4">
                                    <div class="d-flex justify-content-between small text-muted mb-1">
                                        <span>Terakhir Belanja</span>
                                        <span>Tadi Sore</span>
                                    </div>
                                    <h6 class="fw-bold m-0 text-dark-blue">Rp 150.000 (Supermarket)</h6>
                                </div>
                                <div class="bg-light rounded-3 p-3 border-start border-success border-4">
                                    <div class="d-flex justify-content-between small text-muted mb-1">
                                        <span>Pemasukan Gaji</span>
                                        <span>Kemarin</span>
                                    </div>
                                    <h6 class="fw-bold m-0 text-dark-blue">Rp 5.000.000 (Transfer)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .text-dark-blue {
        color: #0f172a;
    }

    .shadow-2xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    /* Efek melayang untuk mockup sebelah kanan */
    .preview-mockup-wrapper {
        transition: transform 0.5s ease;
    }

    .preview-mockup-wrapper:hover {
        transform: scale(1.03) rotate(-1deg);
    }

    /* Animasi sederhana untuk grafik batang */
    .bg-primary {
        transition: height 1s ease-out;
    }
</style>
