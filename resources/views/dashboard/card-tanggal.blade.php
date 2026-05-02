<div class="card border-0 shadow-sm rounded-3 mb-3"> <!-- Rounded dikurangi sedikit agar lebih tegas -->

    <!-- Header: Dibuat lebih tipis dan font semi-bold -->
    <div class="card-header bg-white border-bottom py-2 px-3 d-flex justify-content-between align-items-center">
        <span class="fw-bold text-secondary small">
            <i class="bi bi-calendar3 me-1"></i>
            {{ \Carbon\Carbon::parse($date)->format('d F Y') }}
        </span>
        <span class="badge bg-light text-dark border fw-normal">{{ count($info['transaksi']) }} Transaksi</span>
    </div>

    <div class="card-body p-0"> <!-- Padding body 0 agar tabel menempel sempurna -->
        <div class="table-responsive">
            <table class="table table-sm table-hover align-middle mb-0" style="font-size: 0.85rem;">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3 py-2" style="width: 50px;">No</th>
                        <th class="py-2">Waktu</th>
                        <th class="py-2">Kategori</th>
                        <th class="py-2 text-end pe-3">Nominal</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($info['transaksi'] as $d)
                    <tr>
                        <td class="ps-3 text-muted">{{ $loop->iteration }}</td>

                        <td class="text-secondary">
                            <i class="bi bi-clock me-1" style="font-size: 0.75rem;"></i>
                            {{ \Carbon\Carbon::parse($d->created_at)->format('H:i') }}
                        </td>

                        <td>
                            @if($d->tipe == 'pemasukan')
                                <span class="text-success">
                                    <i class="bi bi-arrow-down-left-circle-fill me-1"></i> Masuk
                                </span>
                            @else
                                <span class="text-danger">
                                    <i class="bi bi-arrow-up-right-circle-fill me-1"></i> Keluar
                                </span>
                            @endif
                        </td>

                        <td class="text-end pe-3 fw-bold">
                            <span class="{{ $d->tipe == 'pemasukan' ? 'text-success' : 'text-danger' }}">
                                {{ $d->tipe == 'pemasukan' ? '+' : '-' }} Rp {{ number_format($d->jumlah, 0, ',', '.') }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
    /* Menghilangkan border terakhir agar tidak double dengan card */
    .table tr:last-child td {
        border-bottom: 0;
    }
    /* Memperhalus tampilan baris tabel */
    .table td {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }
</style>
