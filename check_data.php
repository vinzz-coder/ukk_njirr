<?php

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo 'Pengguna:' . PHP_EOL;
$pengguna = \App\Models\Pengguna::all();
foreach($pengguna as $u) {
    echo $u->id . ': ' . $u->username . PHP_EOL;
}

echo PHP_EOL . 'Transaksi:' . PHP_EOL;
$transaksi = \App\Models\Transaksi::all();
foreach($transaksi as $t) {
    echo $t->id . ': pengguna_id=' . $t->pengguna_id . PHP_EOL;
}

echo PHP_EOL . 'Checking foreign keys...' . PHP_EOL;
try {
    $foreignKeys = \Illuminate\Support\Facades\DB::select("
        SELECT CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME
        FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
        WHERE TABLE_NAME = 'transaksis' AND REFERENCED_TABLE_NAME IS NOT NULL
    ");
    print_r($foreignKeys);
} catch (Exception $e) {
    echo 'Error checking foreign keys: ' . $e->getMessage() . PHP_EOL;
}
