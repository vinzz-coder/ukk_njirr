<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Admin tetap mengambil SEMUA data
        $transaksi = Transaksi::all();

        $totalPemasukan = $transaksi->where('tipe', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = $transaksi->where('tipe', 'pengeluaran')->sum('jumlah');
        $totalTransaksi = $transaksi->count();

        // Data untuk grafik
        $chartPemasukan = $transaksi->where('tipe', 'pemasukan');
        $chartPengeluaran = $transaksi->where('tipe', 'pengeluaran');

        return view('admin.index', compact(
            'transaksi',
            'totalPemasukan',
            'totalPengeluaran',
            'totalTransaksi',
            'chartPemasukan',
            'chartPengeluaran'
        ));
    }

    public function transaksi()
    {
        // Menampilkan riwayat transaksi lengkap dengan nama pemiliknya
        $transaksi = Transaksi::with('pengguna')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.transaksi', compact('transaksi'));
    }
}
