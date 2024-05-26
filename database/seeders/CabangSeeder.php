<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cabangs;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cabangs::create([
            'id_cabang' => 1,
            'cabang' => 'Online',
            'status_cabang' => 1,
            'event' => 'olimpiade'
        ]);
        cabangs::create([
            'id_cabang' => 2,
            'cabang' => 'Offline',
            'status_cabang' => 1,
            'event' => 'olimpiade'
        ]);
        cabangs::create([
            'id_cabang' => 3,
            'cabang' => 'Online',
            'status_cabang' => 1,
            'event' => 'poster'
        ]);
        cabangs::create([
            'id_cabang' => 4,
            'cabang' => 'Offline',
            'status_cabang' => 1,
            'event' => 'poster'
        ]);
    }
}
