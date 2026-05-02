@extends('admin.layouts')

@section('content')
<div class="container-fluid py-3"> <!-- Padding container dirampingkan -->

    <!-- STATS CARD: Dibuat lebih slim dan icon-based -->
    <div class="row g-2 mb-3"> <!-- Gutter/jarak antar kolom diperkecil (g-2) -->

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-2"> <!-- Padding card diperkecil -->
                <div class="d-flex align-items-center px-2">
                    <div class="bg-light p-2 rounded-3 me-3 text-secondary">
                        <i class="bi bi-arrow-left-right fs-4"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Total Transaksi</small>
                        <h5 class="fw-bold mb-0">{{ $totalTransaksi }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-2">
                <div class="d-flex align-items-center px-2">
                    <div class="bg-success-subtle p-2 rounded-3 me-3 text-success">
                        <i class="bi bi-graph-up-arrow fs-4"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Pemasukan</small>
                        <h5 class="fw-bold mb-0 text-success">
                            Rp {{ number_format($totalPemasukan, 0, ',', '.') }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-2">
                <div class="d-flex align-items-center px-2">
                    <div class="bg-danger-subtle p-2 rounded-3 me-3 text-danger">
                        <i class="bi bi-graph-down-arrow fs-4"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Pengeluaran</small>
                        <h5 class="fw-bold mb-0 text-danger">
                            Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-2">
                <div class="d-flex align-items-center px-2">
                    <div class="bg-primary-subtle p-2 rounded-3 me-3 text-primary">
                        <i class="bi bi-wallet2 fs-4"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Saldo Akhir</small>
                        <h5 class="fw-bold mb-0 text-primary">
                            Rp {{ number_format($totalPemasukan - $totalPengeluaran, 0, ',', '.') }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- MAIN CONTENT: Tabel dan Chart diletakkan berdampingan agar mepet -->
    <div class="row g-3">

        <!-- TABLE: 7 Kolom (Lebih lebar) -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">Riwayat Transaksi</h6>
                    <span class="badge bg-light text-dark border">Terbaru</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" style="font-size: 0.9rem;">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-3">Tanggal</th>
                                <th>Tipe</th>
                                <th class="text-end pe-3">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $t)
                            <tr>
                                <td class="ps-3 text-muted">{{ $t->tanggal }}</td>
                                <td>
                                    @if($t->tipe == 'pemasukan')
                                        <span class="badge rounded-pill text-success bg-success-subtle border border-success-subtle">Masuk</span>
                                    @else
                                        <span class="badge rounded-pill text-danger bg-danger-subtle border border-danger-subtle">Keluar</span>
                                    @endif
                                </td>
                                <td class="text-end pe-3 fw-medium">
                                    Rp {{ number_format($t->jumlah, 0, ',', '.') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- CHART: 4 Kolom (Lebih ramping) -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column align-items-center justify-content-center py-4">
                    <h6 class="fw-bold mb-4 text-center">Persentase Keuangan</h6>
                    <div style="max-height: 220px;">
                        <canvas id="chartKeuangan"></canvas>
                    </div>
                    <div class="mt-4 w-100">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="text-muted">Rasio Pemasukan</small>
                            <small class="fw-bold text-success">
                                {{ $totalPemasukan > 0 ? round(($totalPemasukan / ($totalPemasukan + $totalPengeluaran)) * 100) : 0 }}%
                            </small>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" style="width: {{ $totalPemasukan > 0 ? ($totalPemasukan / ($totalPemasukan + $totalPengeluaran)) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chartKeuangan');
new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Masuk', 'Keluar'],
        datasets: [{
            data: [{{ $chartPemasukan }}, {{ $chartPengeluaran }}],
            backgroundColor: ['#16a34a', '#dc2626'],
            hoverOffset: 4,
            borderWidth: 0
        }]
    },
    options: {
        cutout: '75%',
        plugins: {
            legend: {
                position: 'bottom',
                labels: { usePointStyle: true, padding: 20 }
            }
        }
    }
});
</script>

<style>
    /* Tambahan agar warna badge subtle lebih manis */
    .bg-success-subtle { background-color: rgba(25, 135, 84, 0.15) !important; }
    .bg-danger-subtle { background-color: rgba(220, 53, 69, 0.15) !important; }
    .bg-primary-subtle { background-color: rgba(13, 110, 253, 0.15) !important; }
</style>
@endsection
