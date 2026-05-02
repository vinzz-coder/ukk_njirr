<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->enum('tipe', ['pemasukan', 'pengeluaran']);
            $table->bigInteger('jumlah');

            // Menghubungkan ke tabel 'pengguna'
            $table->foreignId('pengguna_id')
                  ->constrained('pengguna')
                  ->onDelete('cascade'); // Jika user dihapus, transaksi ikut terhapus

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
}; // Tambahkan tutup kurung ini agar tidak error
