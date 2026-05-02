@extends('admin.layouts')

@section('content')
<div class="container-fluid py-3">

    <!-- HEADER PAGE: Ringkas & Padat -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="fw-bold mb-0">Data Transaksi</h4>
            <small class="text-muted">Manajemen seluruh riwayat keuangan pengguna</small>
        </div>
        <button class="btn btn-primary btn-sm rounded-pill px-3">
            <i class="bi bi-download me-1"></i> Export Laporan
        </button>
    </div>

    <!-- TABLE CARD -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0"> <!-- P-0 biar tabel mepet ke pinggir card tapi tetep rapi -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 text-secondary" style="width: 50px;">No</th>
                            <th class="py-3 text-secondary">Pengguna</th>
                            <th class="py-3 text-secondary">Tanggal</th>
                            <th class="py-3 text-secondary">Tipe</th>
                            <th class="py-3 text-secondary text-end pe-4">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $t)
                        <tr>
                            <td class="ps-4 fw-medium">{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-secondary-subtle rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                        <i class="bi bi-person text-secondary" style="font-size: 0.8rem;"></i>
                                    </div>
                                    <span class="fw-semibold">{{ $t->pengguna->username }}</span>
                                </div>
                            </td>
                            <td class="text-muted">{{ $t->tanggal }}</td>
                            <td>
                                @if($t->tipe == 'pemasukan')
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3">
                                        <i class="bi bi-plus-circle me-1"></i> Pemasukan
                                    </span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3">
                                        <i class="bi bi-dash-circle me-1"></i> Pengeluaran
                                    </span>
                                @endif
                            </td>
                            <td class="text-end pe-4 fw-bold">
                                Rp {{ number_format($t->jumlah, 0, ',', '.') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- PAGINATION INFO (Optional) -->
    <div class="d-flex justify-content-between align-items-center mt-3 px-2">
        <small class="text-muted">Menampilkan {{ $transaksi->count() }} data transaksi terbaru</small>
        <!-- Tempat pagination lek misal kakean datane -->
    </div>

</div>

<style>
    /* Styling tambahan biar mepet tapi tetep elegan */
    .table thead th {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        border-bottom: 1px solid #f0f0f0;
    }

    .table tbody td {
        padding-top: 12px;
        padding-bottom: 12px;
        font-size: 0.9rem;
        border-bottom: 1px solid #f8f9fa;
    }

    .badge {
        font-weight: 500;
        letter-spacing: 0.3px;
    }

    .bg-success-subtle { background-color: rgba(25, 135, 84, 0.1) !important; }
    .bg-danger-subtle { background-color: rgba(220, 53, 69, 0.1) !important; }
</style>
@endsection
