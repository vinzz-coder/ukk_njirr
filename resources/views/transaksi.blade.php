<!DOCTYPE html>
<html>
<head>
    <title>Transaksi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-warning">
    <div class="container">
        <span class="navbar-brand">Kelola Transaksi</span>
        <div>
            <a href="/dashboard" class="btn btn-dark">Dashboard</a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- FORM -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5>Tambah Transaksi</h5>

            <form method="POST" action="/transaksi">
                @csrf
                <div class="row g-2">
                    <div class="col-md-3">
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <select name="tipe" class="form-control">
                            <option value="pemasukan">Pemasukan</option>
                            <option value="pengeluaran">Pengeluaran</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-warning w-100">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- TABEL -->
    <div class="card shadow">
        <div class="card-body">
            <h5>Riwayat Transaksi</h5>

            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Tipe</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>

                @foreach($data as $i => $d)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $d->tanggal }}</td>
                    <td>
                        @if($d->tipe == 'pemasukan')
                            <span class="badge bg-success">Pemasukan</span>
                        @else
                            <span class="badge bg-danger">Pengeluaran</span>
                        @endif
                    </td>
                    <td>Rp {{ number_format($d->jumlah,0,',','.') }}</td>
                    <td>
                        <a href="/transaksi/hapus/{{ $d->id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

</div>

</body>
</html>
