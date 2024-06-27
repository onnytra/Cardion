<?php

namespace Database\Seeders;

use App\Models\gelombang_pembayarans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GelombangPembayaranSeeder extends Seeder
{
    public function run()
    {
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 1',
            'harga' => 125000,
            'mulai' => '2024-05-15',
            'selesai' => '2024-08-09',
            'event' => 'olimpiade',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 2',
            'harga' => 135000,
            'mulai' => '2024-08-10',
            'selesai' => '2024-10-13',
            'event' => 'olimpiade',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 3',
            'harga' => 150000,
            'mulai' => '2024-10-14',
            'selesai' => '2024-12-14',
            'event' => 'olimpiade',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 4',
            'harga' => 170000,
            'mulai' => '2024-12-15',
            'selesai' => '2025-01-20',
            'event' => 'olimpiade',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 1',
            'harga' => 75000,
            'mulai' => '2024-05-15',
            'selesai' => '2024-08-09',
            'event' => 'poster',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 2',
            'harga' => 85000,
            'mulai' => '2024-08-10',
            'selesai' => '2024-10-13',
            'event' => 'poster',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 3',
            'harga' => 95000,
            'mulai' => '2024-10-14',
            'selesai' => '2024-12-14',
            'event' => 'poster',
            'status_gelombang_pembayaran' => 1
        ]);
        gelombang_pembayarans::create([
            'gelombang' => 'Gelombang 4',
            'harga' => 105000,
            'mulai' => '2024-12-15',
            'selesai' => '2025-01-20',
            'event' => 'poster',
            'status_gelombang_pembayaran' => 1
        ]);
    }
}
