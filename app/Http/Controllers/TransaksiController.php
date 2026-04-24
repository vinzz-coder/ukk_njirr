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

        $allData = Transaksi::orderBy('tanggal', 'asc')->get();

        $dataByDate = [];
        $cumulativeSaldo = 0;

        foreach ($allData as $d) {

            // ✅ Pakai WIB + grouping per hari
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

        return view('dashboard', compact('dataByDate', 'totalSaldo'));
    }

    public function index()
    {
        if (!session('login')) {
            return redirect('/login');
        }

        $data = Transaksi::orderBy('tanggal', 'desc')->get();

        return view('transaksi', compact('data'));
    }

    public function store(Request $request)
    {
        if (!session('login')) {
            return redirect('/login');
        }

        $request->validate([
            'tanggal' => 'required|date',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric|min:1'
        ]);

        Transaksi::create([
            'tanggal' => Carbon::parse($request->tanggal)
                ->setTimezone('Asia/Jakarta'),
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/transaksi')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function destroy($id)
    {
        if (!session('login')) {
            return redirect('/login');
        }

        $transaksi = Transaksi::find($id);

        if ($transaksi) {
            $transaksi->delete();
        }

        return redirect('/transaksi')->with('success', 'Transaksi berhasil dihapus');
    }
}
