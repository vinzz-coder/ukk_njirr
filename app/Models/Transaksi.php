<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // Tambahkan ini agar sinkron dengan database
    protected $table = 'transaksi';

    protected $fillable = ['tanggal', 'tipe', 'jumlah', 'pengguna_id'];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
