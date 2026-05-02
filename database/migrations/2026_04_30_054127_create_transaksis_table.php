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
       Schema::create('transaksis', function (Blueprint $table) {
    $table->id();
    $table->dateTime('tanggal');
    $table->enum('tipe', ['pemasukan', 'pengeluaran']);
    $table->bigInteger('jumlah');
    $table->unsignedBigInteger('pengguna_id');
    $table->foreign('pengguna_id')->references('id')->on('pengguna');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
