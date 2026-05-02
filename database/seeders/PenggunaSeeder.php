<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat atau Update Akun Admin
        Pengguna::updateOrCreate(
            ['username' => 'admin'], // Cari berdasarkan username
            [
                'password' => Hash::make('admin123'), // Password terenkripsi
                'role' => 'admin',
            ]
        );

        // 2. Buat atau Update Akun User Biasa
        Pengguna::updateOrCreate(
            ['username' => 'user1'],
            [
                'password' => Hash::make('user123'),
                'role' => 'pengguna',
            ]
        );
    }
}
