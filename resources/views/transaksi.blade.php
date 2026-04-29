<!DOCTYPE html>
<html>
<head>
    <title>Transaksi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar bg-warning-subtle shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold text-dark">Kelola Transaksi</span>
        <div class="d-flex gap-2">
            <a href="/dashboard" class="btn btn-dark btn-sm rounded-pill px-3">Dashboard</a>
            <a href="/logout" class="btn btn-danger btn-sm rounded-pill px-3">Logout</a>
        </div>
    </div>
</nav>

<div class="container py-4">

    <!-- FORM -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body">
            <h5 class="fw-semibold mb-3">Tambah Transaksi</h5>

            <form method="POST" action="/transaksi">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <input type="date" name="tanggal" class="form-control rounded-3" required>
                    </div>

                    <div class="col-md-3">
                        <select name="tipe" class="form-select rounded-3">
                            <option value="pemasukan">Pemasukan</option>
                            <option value="pengeluaran">Pengeluaran</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <input type="number" name="jumlah" class="form-control rounded-3" placeholder="Jumlah" required>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-warning w-100 rounded-3 fw-semibold shadow-sm">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- TABEL -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body">
            <h5 class="fw-semibold mb-3">Riwayat Transaksi</h5>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Tipe</th>
                            <th>Jumlah</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($data as $i => $d)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $d->tanggal }}</td>
                        <td>
                            @if($d->tipe == 'pemasukan')
                                <span class="badge bg-success-subtle text-success">Pemasukan</span>
                            @else
                                <span class="badge bg-danger-subtle text-danger">Pengeluaran</span>
                            @endif
                        </td>
                        <td class="fw-semibold">
                            Rp {{ number_format($d->jumlah,0,',','.') }}
                        </td>
                        <td class="text-center">
                            <a href="/transaksi/hapus/{{ $d->id }}" class="btn btn-danger btn-sm rounded-pill px-3">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

</body>
</html>
