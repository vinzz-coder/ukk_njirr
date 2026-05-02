<section id="security" class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f1f5f9 100%);">
    <div class="container py-lg-5 text-center">

        <!-- HEADER -->
        <div class="mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success px-4 py-2 rounded-pill mb-3 fw-bold small">
                <i class="bi bi-shield-fill-check me-2"></i> PRIVASI ANDA ADALAH PRIORITAS
            </div>
            <h2 class="fw-bold display-6 text-dark-blue">Keamanan Data Tingkat Tinggi</h2>
            <p class="text-muted mx-auto mt-3" style="max-width: 650px;">
                Kami memahami pentingnya privasi finansial Anda. Sistem kami dirancang dengan standar keamanan modern untuk memastikan data Anda tetap pribadi.
            </p>
        </div>

        <div class="row g-4 mt-2">

            <!-- KEAMANAN 1 -->
            <div class="col-md-4">
                <div class="security-card p-4 bg-white rounded-4 shadow-sm border-0 h-100 transition-all">
                    <div class="security-icon mb-3 mx-auto">
                        <i class="bi bi-fingerprint"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Login Protected</h5>
                    <p class="text-muted small m-0">Autentikasi berlapis memastikan hanya Anda yang memiliki akses penuh ke dashboard keuangan pribadi.</p>
                </div>
            </div>

            <!-- KEAMANAN 2 -->
            <div class="col-md-4">
                <div class="security-card p-4 bg-white rounded-4 shadow-sm border-0 h-100 transition-all">
                    <div class="security-icon mb-3 mx-auto">
                        <i class="bi bi-incognito"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">Session Secure</h5>
                    <p class="text-muted small m-0">Enkripsi sesi yang kuat mencegah pihak tidak bertanggung jawab mengambil alih akun saat Anda sedang aktif.</p>
                </div>
            </div>

            <!-- KEAMANAN 3 -->
            <div class="col-md-4">
                <div class="security-card p-4 bg-white rounded-4 shadow-sm border-0 h-100 transition-all">
                    <div class="security-icon mb-3 mx-auto">
                        <i class="bi bi-database-fill-x"></i>
                    </div>
                    <h5 class="fw-bold text-dark-blue">No Data Leak</h5>
                    <p class="text-muted small m-0">Data Anda tidak akan pernah dibagikan atau dijual ke pihak ketiga. Privasi Anda adalah komitmen utama kami.</p>
                </div>
            </div>

        </div>

        <div class="mt-5 p-4 bg-dark-blue rounded-4 text-white shadow-lg d-inline-block px-md-5">
            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                <i class="bi bi-lock-fill fs-3 text-success"></i>
                <span class="fw-medium">Sistem kami menggunakan enkripsi end-to-end untuk setiap transaksi yang Anda simpan.</span>
            </div>
        </div>

    </div>
</section>

<style>
    .text-dark-blue { color: #0f172a; }
    .bg-dark-blue { background-color: #0f172a; }

    .security-card {
        border-top: 4px solid transparent !important;
        transition: all 0.3s ease;
    }

    .security-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.08) !important;
        border-top-color: #10b981 !important; /* Emerald Green saat hover */
    }

    .security-icon {
        width: 64px;
        height: 64px;
        background: #f8fafc;
        color: #10b981;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.8rem;
        transition: all 0.3s ease;
    }

    .security-card:hover .security-icon {
        background: #10b981;
        color: white;
        transform: scale(1.1);
    }

    .transition-all { transition: all 0.3s ease; }
</style>
