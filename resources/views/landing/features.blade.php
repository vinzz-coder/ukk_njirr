<section id="fitur" class="py-5" style="background: #ffffff;">
    <div class="container py-lg-5 text-center">

        <!-- HEADER SECTION -->
        <div class="mb-5">
            <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3 fw-bold">
                EKSKLUSIF UNTUKMU
            </span>
            <h2 class="fw-bold display-6 text-dark-blue">Fitur Unggulan <span class="text-primary">MoneyTracker</span></h2>
            <div class="mx-auto bg-primary rounded-pill mt-3" style="width: 60px; height: 4px;"></div>
        </div>

        <div class="row g-4 mt-2">

            <!-- FITUR 1 -->
            <div class="col-md-4">
                <div class="card card-hover border-0 shadow-sm p-4 h-100 rounded-4 transition-all bg-white">
                    <div class="icon-box mb-4 mx-auto bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="bi bi-cpu-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Auto Tracking</h5>
                    <p class="text-muted px-lg-3">Semua transaksi tercatat secara otomatis dan sistematis dalam satu sistem terintegrasi.</p>
                </div>
            </div>

            <!-- FITUR 2 -->
            <div class="col-md-4">
                <div class="card card-hover border-0 shadow-sm p-4 h-100 rounded-4 transition-all bg-white text-center">
                    <div class="icon-box mb-4 mx-auto bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="bi bi-tags-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Kategori Keuangan</h5>
                    <p class="text-muted px-lg-3">Pisahkan pengeluaran kamu berdasarkan kategori untuk analisis yang lebih mendalam.</p>
                </div>
            </div>

            <!-- FITUR 3 -->
            <div class="col-md-4">
                <div class="card card-hover border-0 shadow-sm p-4 h-100 rounded-4 transition-all bg-white">
                    <div class="icon-box mb-4 mx-auto bg-info bg-opacity-10 text-info rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                        <i class="bi bi-clock-history fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Laporan Real-Time</h5>
                    <p class="text-muted px-lg-3">Pantau saldo yang langsung berubah setiap detik setelah transaksi berhasil disimpan.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* Global Text Color */
    .text-dark-blue {
        color: #0f172a;
    }

    /* Card Hover Effect */
    .card-hover {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid rgba(0,0,0,0.02) !important;
    }

    .card-hover:hover {
        transform: translateY(-12px);
        background: #ffffff;
        box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.15) !important;
        border-color: rgba(59, 130, 246, 0.1) !important;
    }

    /* Icon Animation */
    .card-hover:hover .icon-box {
        transform: scale(1.1) rotate(5deg);
        transition: transform 0.3s ease;
    }

    .icon-box {
        transition: all 0.3s ease;
    }

    .transition-all {
        transition: all 0.3s ease;
    }
</style>
