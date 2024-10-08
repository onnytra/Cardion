<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\rayons;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rayons::create([
            'rayon' => 'Online',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 1,
        ]);
        rayons::create([
            'rayon' => 'Malang',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Surabaya',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Probolinggo',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Tulungagung',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Jombang',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Madura',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Semarang',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 2,
        ]);
        rayons::create([
            'rayon' => 'Online',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 3,
        ]);
        rayons::create([
            'rayon' => 'Malang',
            'kuota' => 100,
            'status_rayon' => 1,
            'contact_person' => '1234567890',
            'id_cabang' => 4,
        ]);
    }
}
