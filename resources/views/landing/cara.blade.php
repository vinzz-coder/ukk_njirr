<section id="cara" class="py-5" style="background-color: #f8fafc;">
    <div class="container py-lg-5">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6 text-dark-blue">Tiga Langkah <span class="text-primary">Mudah</span></h2>
            <p class="text-muted mx-auto" style="max-width: 500px;">Hanya butuh beberapa detik untuk mulai mengontrol masa depan finansial Anda.</p>
        </div>

        <div class="row g-4 position-relative">
            <!-- Garis Penghubung Alur (Hanya muncul di Desktop) -->
            <div class="d-none d-lg-block position-absolute top-50 start-50 translate-middle w-75" style="height: 2px; border-top: 2px dashed #e2e8f0; z-index: 0;"></div>

            <!-- LANGKAH 1 -->
            <div class="col-md-4 position-relative" style="z-index: 1;">
                <div class="p-4 bg-white shadow-sm rounded-4 text-center border-0 h-100 step-card">
                    <div class="step-number mb-3 mx-auto">1</div>
                    <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-person-check-fill fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Login / Daftar</h5>
                    <p class="text-muted small mb-0">Masuk ke akun Anda dengan aman menggunakan sistem autentikasi kami.</p>
                </div>
            </div>

            <!-- LANGKAH 2 -->
            <div class="col-md-4 position-relative" style="z-index: 1;">
                <div class="p-4 bg-white shadow-sm rounded-4 text-center border-0 h-100 step-card">
                    <div class="step-number mb-3 mx-auto">2</div>
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-pencil-square fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Input Transaksi</h5>
                    <p class="text-muted small mb-0">Masukkan jumlah pemasukan atau pengeluaran harian Anda dengan cepat.</p>
                </div>
            </div>

            <!-- LANGKAH 3 -->
            <div class="col-md-4 position-relative" style="z-index: 1;">
                <div class="p-4 bg-white shadow-sm rounded-4 text-center border-0 h-100 step-card">
                    <div class="step-number mb-3 mx-auto">3</div>
                    <div class="bg-info bg-opacity-10 text-info p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-graph-up-arrow fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Pantau Saldo</h5>
                    <p class="text-muted small mb-0">Lihat analisis keuangan dan total saldo Anda yang terupdate secara instan.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .text-dark-blue { color: #0f172a; }

    .step-card {
        transition: all 0.3s ease;
        border: 1px solid transparent !important;
    }

    .step-card:hover {
        transform: translateY(-5px);
        border-color: #3b82f6 !important;
        box-shadow: 0 15px 30px rgba(59, 130, 246, 0.1) !important;
    }

    .step-number {
        width: 40px;
        height: 40px;
        background: #0f172a;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.1rem;
        border: 4px solid #f8fafc;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .step-card:hover .step-number {
        background: #3b82f6;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }
</style>
