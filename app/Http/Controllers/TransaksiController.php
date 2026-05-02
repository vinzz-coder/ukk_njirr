<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    public function dashboard()
    {
        if (!session('login')) {
            return redirect('/login');
        }

        // PERBAIKAN: Filter berdasarkan pengguna yang sedang login
        $allData = Transaksi::where('pengguna_id', session('pengguna_id'))
            ->orderBy('tanggal', 'asc')
            ->get();

        $dataByDate = [];
        $cumulativeSaldo = 0;

        foreach ($allData as $d) {
            $date = Carbon::parse($d->tanggal)
                ->setTimezone('Asia/Jakarta')
                ->format('Y-m-d');

            if (!isset($dataByDate[$date])) {
                $dataByDate[$date] = [
                    'transaksi' => [],
                    'saldo_awal' => $cumulativeSaldo,
                    'pemasukan' => 0,
                    'pengeluaran' => 0,
                    'saldo_akhir' => $cumulativeSaldo
                ];
            }

            $dataByDate[$date]['transaksi'][] = $d;

            if ($d->tipe === 'pemasukan') {
                $dataByDate[$date]['pemasukan'] += $d->jumlah;
                $cumulativeSaldo += $d->jumlah;
            } else {
                $dataByDate[$date]['pengeluaran'] += $d->jumlah;
                $cumulativeSaldo -= $d->jumlah;
            }
            $dataByDate[$date]['saldo_akhir'] = $cumulativeSaldo;
        }

        $dataByDate = array_reverse($dataByDate, true);
        $totalSaldo = $cumulativeSaldo;

        return view('dashboard.index', compact('dataByDate', 'totalSaldo'));
    }

    public function index()
    {
        if (!session('login')) return redirect('/login');

        // Pastikan hanya melihat data sendiri
        $data = Transaksi::where('pengguna_id', session('pengguna_id'))
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('transaksi', compact('data'));
    }

    public function store(Request $request)
    {
        if (!session('login')) return redirect('/login');

        $request->validate([
            'tanggal' => 'required|date',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric|min:1'
        ]);

        Transaksi::create([
            'tanggal' => Carbon::parse($request->tanggal)->setTimezone('Asia/Jakarta'),
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'pengguna_id' => session('pengguna_id'), // Otomatis terikat ke akun yang login
        ]);

        return redirect('/user')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit($id)
    {
        if (!session('login')) return redirect('/login');

        $transaksi = Transaksi::where('id', $id)
            ->where('pengguna_id', session('pengguna_id'))
            ->firstOrFail();

        $data = Transaksi::where('pengguna_id', session('pengguna_id'))
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('transaksi', compact('data', 'transaksi'));
    }

    public function update(Request $request, $id)
    {
        if (!session('login')) return redirect('/login');

        $request->validate([
            'tanggal' => 'required|date',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric|min:1'
        ]);

        $transaksi = Transaksi::where('id', $id)
            ->where('pengguna_id', session('pengguna_id'))
            ->firstOrFail();

        $transaksi->update([
            'tanggal' => Carbon::parse($request->tanggal)->setTimezone('Asia/Jakarta'),
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/user')->with('success', 'Transaksi berhasil diperbarui');
    }

    public function destroy($id)
    {
        if (!session('login')) return redirect('/login');

        // Tambahkan pengamanan agar tidak bisa hapus transaksi orang lain
        $transaksi = Transaksi::where('id', $id)
            ->where('pengguna_id', session('pengguna_id'))
            ->first();

        if ($transaksi) {
            $transaksi->delete();
        }

        return redirect('/user')->with('success', 'Transaksi berhasil dihapus');
    }
}
