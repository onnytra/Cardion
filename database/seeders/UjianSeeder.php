<?php

namespace Database\Seeders;

use App\Models\ujians;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ujians::create([
            'id_ujian' => 1,
            'judul' => 'Ujian 1',
            'durasi' => 60,
            'total_soal' => 10,
            'soal_acak' => 1,
            'tampilkan_jawaban' => 1,
            'tampilkan_nilai' => 1,
            'status_ujian' => 1
        ]);
    }
}
