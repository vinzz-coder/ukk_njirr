<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi</title>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background: #f4f7f6;
            font-family: 'Poppins', sans-serif;
        }

        /* --- NAVBAR STYLING --- */
        .navbar-custom {
            background: #0f172a;
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand-custom {
            color: #ffffff !important;
            font-weight: 700;
            font-size: 1.25rem;
        }

        .navbar-brand-custom span {
            color: #3b82f6;
        }

        /* --- CARD & FORM STYLING --- */
        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            background: #ffffff;
        }

        .form-control, .form-select {
            padding: 10px 15px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .btn-primary-custom {
            background: #3b82f6;
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary-custom:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        /* --- TABLE STYLING --- */
        .table thead {
            background: #f8fafc;
        }

        .table thead th {
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            padding: 15px;
            border-bottom: 2px solid #f1f5f9;
        }

        .table tbody td {
            padding: 15px;
            color: #1e293b;
            border-bottom: 1px solid #f1f5f9;
        }

        /* --- BADGE STYLING --- */
        .badge-income {
            background: rgba(34, 197, 94, 0.1) !important;
            color: #16a34a !important;
            padding: 6px 12px;
            border-radius: 6px;
        }

        .badge-expense {
            background: rgba(239, 68, 68, 0.1) !important;
            color: #dc2626 !important;
            padding: 6px 12px;
            border-radius: 6px;
        }

        .btn-back {
            background: #1e293b;
            color: white;
            transition: all 0.3s;
        }

        .btn-back:hover {
            background: #0f172a;
            color: white;
            transform: translateX(-5px);
        }
    </style>
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-custom">
    <div class="container">
        <a class="navbar-brand navbar-brand-custom" href="#">
            <i class="bi bi-wallet2 me-2"></i>Kelola <span>Transaksi</span>
        </a>

        <div class="d-flex align-items-center">
            <a href="/logout" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-medium">
                <i class="bi bi-box-arrow-left me-1"></i> Logout
            </a>
        </div>
    </div>
</nav>

<div class="container py-5">

    <!-- FORM TAMBAH / EDIT -->
    <div class="card card-custom mb-5">
        <div class="card-body p-4">
            <div class="d-flex align-items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3">
                    <i class="bi bi-pencil-square text-primary fs-4"></i>
                </div>
                <h5 class="fw-bold m-0">{{ isset($transaksi) ? 'Edit Transaksi' : 'Tambah Transaksi Baru' }}</h5>
            </div>

            <form method="POST" action="{{ isset($transaksi) ? '/user/update/' . $transaksi->id : '/user' }}">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row g-3">
                    <div class="col-md-3">
                        <label class="small fw-bold text-muted mb-2">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control rounded-3" value="{{ old('tanggal', isset($transaksi) ? \Carbon\Carbon::parse($transaksi->tanggal)->format('Y-m-d') : '') }}" required>
                    </div>

                    <div class="col-md-3">
                        <label class="small fw-bold text-muted mb-2">Jenis</label>
                        <select name="tipe" class="form-select rounded-3">
                            <option value="pemasukan" {{ (old('tipe', $transaksi->tipe ?? '') == 'pemasukan') ? 'selected' : '' }}>Pemasukan</option>
                            <option value="pengeluaran" {{ (old('tipe', $transaksi->tipe ?? '') == 'pengeluaran') ? 'selected' : '' }}>Pengeluaran</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="small fw-bold text-muted mb-2">Nominal (Rp)</label>
                        <input type="number" name="jumlah" class="form-control rounded-3" placeholder="Contoh: 50000" value="{{ old('jumlah', $transaksi->jumlah ?? '') }}" required>
                    </div>

                    <div class="col-md-3 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary-custom w-100 rounded-3 py-2">
                            <i class="bi bi-check-lg me-1"></i>
                            {{ isset($transaksi) ? 'Perbarui Transaksi' : 'Simpan Transaksi' }}
                        </button>
                    </div>
                </div>
            </form>

            @if(isset($transaksi))
            <div class="mt-3 text-end">
                <a href="/user" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                    <i class="bi bi-arrow-left me-1"></i> Batal
                </a>
            </div>
            @endif
        </div>
    </div>

    <!-- TABEL RIWAYAT -->
    <div class="card card-custom">
        <div class="card-body p-0">
            <div class="p-4 border-bottom">
                <h5 class="fw-bold m-0">Riwayat Transaksi</h5>
            </div>

            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Tanggal</th>
                            <th>Tipe</th>
                            <th>Jumlah</th>
                            <th class="text-center pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $i => $d)
                        <tr>
                            <td class="ps-4 text-muted">{{ $i+1 }}</td>
                            <td class="fw-medium">{{ \Carbon\Carbon::parse($d->tanggal)->format('d M Y') }}</td>
                            <td>
                                @if($d->tipe == 'pemasukan')
                                    <span class="badge badge-income">
                                        <i class="bi bi-arrow-up-short"></i> Pemasukan
                                    </span>
                                @else
                                    <span class="badge badge-expense">
                                        <i class="bi bi-arrow-down-short"></i> Pengeluaran
                                    </span>
                                @endif
                            </td>
                            <td class="fw-bold">
                                Rp {{ number_format($d->jumlah, 0, ',', '.') }}
                            </td>
                            <td class="text-center pe-4">
                                <a href="/user/edit/{{ $d->id }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 me-1">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <a href="/user/hapus/{{ $d->id }}"
                                   class="btn btn-sm btn-outline-danger rounded-pill px-3"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="bi bi-trash3 me-1"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TOMBOL NAVIGASI -->
    <div class="mt-4">
        <a href="/dashboard" class="btn btn-back rounded-pill px-4 py-2 shadow-sm d-inline-flex align-items-center">
            <i class="bi bi-arrow-left me-2"></i> Kembali ke Dashboard
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
