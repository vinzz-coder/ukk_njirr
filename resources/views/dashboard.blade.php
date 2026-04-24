<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-warning">
    <div class="container">
        <span class="navbar-brand">Dashboard</span>
        <div>
            <a href="/transaksi" class="btn btn-dark">Kelola Transaksi</a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- Total Saldo Card -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card shadow-lg bg-primary text-white">
                <div class="card-body text-center">
                    <h6 class="card-title">Total Saldo Keseluruhan</h6>
                    <h2 class="display-4">Rp {{ number_format($totalSaldo, 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- By Date Breakdown -->
    <div class="row">
        <div class="col-md-12">
            @if(count($dataByDate) > 0)
                @foreach($dataByDate as $date => $info)
                <div class="card shadow mb-3">
                    <div class="card-header bg-warning text-dark">
                        <div class="row">
                            <div class="col-md-4">
                              <strong>{{ \Carbon\Carbon::parse($date)->setTimezone('Asia/Jakarta')->format('d F Y (H:i)') }}    </strong>
                            </div>
                            <div class="col-md-8">
                                <span class="badge bg-info">Saldo Awal: Rp {{ number_format($info['saldo_awal'], 0, ',', '.') }}</span>
                                <span class="badge bg-success">Pemasukan: Rp {{ number_format($info['pemasukan'], 0, ',', '.') }}</span>
                                <span class="badge bg-danger">Pengeluaran: Rp {{ number_format($info['pengeluaran'], 0, ',', '.') }}</span>
                                <span class="badge bg-primary">Saldo Akhir: Rp {{ number_format($info['saldo_akhir'], 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped">
                            <thead>
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
                                    <td>{{ $d->created_at ? \Carbon\Carbon::parse($d->created_at)->format('H:i:s') : '' }}</td>
                                    <td>
                                        @if($d->tipe == 'pemasukan')
                                        <span class="badge bg-success">Pemasukan</span>
                                        @else
                                        <span class="badge bg-danger">Pengeluaran</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($d->tipe == 'pemasukan')
                                        <span class="text-success">+ Rp {{ number_format($d->jumlah, 0, ',', '.') }}</span>
                                        @else
                                        <span class="text-danger">- Rp {{ number_format($d->jumlah, 0, ',', '.') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            @else
                <div class="alert alert-info text-center">
                    <p class="mb-0">Belum ada transaksi</p>
                </div>
            @endif
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
