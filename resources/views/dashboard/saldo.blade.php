<div class="container py-2"> <!-- Padding atas-bawah dirapatkan -->
    <div class="card border-0 shadow-sm rounded-4 position-relative overflow-hidden"
         style="background: linear-gradient(45deg, #3b82f6, #2563eb);">

        <!-- Ikon dekoratif tipis di latar belakang -->
        <div class="position-absolute top-0 end-0 p-3 opacity-25 text-white">
            <i class="bi bi-cash-stack" style="font-size: 3.5rem; transform: rotate(-10deg);"></i>
        </div>

        <div class="card-body py-3 px-3 text-center position-relative" style="z-index: 1;">
            <p class="text-white opacity-75 mb-0 small text-uppercase fw-semibold" style="letter-spacing: 0.5px;">
                Total Saldo Keseluruhan
            </p>
            <h2 class="fw-bold text-white mb-0 mt-1">
                <span class="fs-5 fw-normal">Rp</span> {{ number_format($totalSaldo, 0, ',', '.') }}
            </h2>

            <!-- Info update kecil agar terlihat padat -->
            <div class="mt-2">
                <span class="badge bg-white bg-opacity-25 text-white rounded-pill px-3 py-1" style="font-size: 0.7rem;">
                    <i class="bi bi-shield-check me-1"></i> Saldo Terverifikasi
                </span>
            </div>
        </div>
    </div>
</div>

<style>
    /* Menghaluskan tampilan shadow agar tidak terlihat kotor */
    .shadow-sm {
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15) !important;
    }
</style>
