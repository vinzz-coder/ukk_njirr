<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar bg-warning-subtle shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold text-dark">Dashboard</span>
        <div class="d-flex gap-2">
            <a href="/transaksi" class="btn btn-dark btn-sm rounded-pill px-3">Kelola Transaksi</a>
            <a href="/logout" class="btn btn-danger btn-sm rounded-pill px-3">Logout</a>
        </div>
    </div>
</nav>

<div class="container py-4">

    <!-- TOTAL SALDO -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-lg rounded-4 bg-warning text-dark">
                <div class="card-body text-center py-4">
                    <h6 class="text-muted">Total Saldo Keseluruhan</h6>
                    <h2 class="display-5 fw-bold">
                        Rp {{ number_format($totalSaldo, 0, ',', '.') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- DATA PER TANGGAL -->
    <div class="row">
        <div class="col-12">

            @if(count($dataByDate) > 0)

                @foreach($dataByDate as $date => $info)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <!-- HEADER -->
                    <div class="card-header bg-white border-0 pb-0">
                        <div class="d-flex flex-column flex-lg-row justify-content-between gap-2">

                            <div class="fw-semibold">
                                {{ \Carbon\Carbon::parse($date)->setTimezone('Asia/Jakarta')->format('d F Y') }}
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-secondary-subtle text-dark">
                                    Awal: Rp {{ number_format($info['saldo_awal'], 0, ',', '.') }}
                                </span>
                                <span class="badge bg-success-subtle text-success">
                                    + Rp {{ number_format($info['pemasukan'], 0, ',', '.') }}
                                </span>
                                <span class="badge bg-danger-subtle text-danger">
                                    - Rp {{ number_format($info['pengeluaran'], 0, ',', '.') }}
                                </span>
                                <span class="badge bg-primary-subtle text-primary">
                                    Akhir: Rp {{ number_format($info['saldo_akhir'], 0, ',', '.') }}
                                </span>
                            </div>

                        </div>
                    </div>

                    <!-- BODY -->
                    <div class="card-body pt-3">

                        <div class="table-responsive">
                            <table class="table table-sm align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Jam</th>
                                        <th>Tipe</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($info['transaksi'] as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td class="text-muted small">
                                            {{ $d->created_at ? \Carbon\Carbon::parse($d->created_at)->format('H:i') : '-' }}
                                        </td>

                                        <td>
                                            @if($d->tipe == 'pemasukan')
                                                <span class="badge bg-success-subtle text-success">Pemasukan</span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger">Pengeluaran</span>
                                            @endif
                                        </td>

                                        <td class="fw-semibold">
                                            @if($d->tipe == 'pemasukan')
                                                <span class="text-success">
                                                    + Rp {{ number_format($d->jumlah, 0, ',', '.') }}
                                                </span>
                                            @else
                                                <span class="text-danger">
                                                    - Rp {{ number_format($d->jumlah, 0, ',', '.') }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>

                @endforeach

            @else
                <div class="alert alert-info text-center rounded-4">
                    <p class="mb-0">Belum ada transaksi</p>
                </div>
            @endif

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
