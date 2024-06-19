<?php

namespace App\Imports;

use App\Models\pesertas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PesertasImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new pesertas([
            'nama_team'          => $row['nama_team'],
            'ketua'              => $row['ketua'],
            'email'              => $row['email'],
            'telepon'            => $row['telepon'],
            'password'           => $row['password'],
            'cabang_lomba'       => $row['cabang_lomba'],
            'anggota_1'          => $row['anggota_1'],
            'telepon_anggota_1'  => $row['telepon_anggota_1'],
            'anggota_2'          => $row['anggota_2'],
            'telepon_anggota_2'  => $row['telepon_anggota_2'],
            'sekolah'            => $row['sekolah'],
            'alamat_sekolah'     => $row['alamat_sekolah'],
            'cabang'             => $row['cabang'],
            'rayon'              => $row['rayon'],
            'gelombang_pembayaran' => $row['gelombang_pembayaran'],
            'metode_pembayaran'  => $row['metode_pembayaran'],
            'bukti_pembayaran'   => $row['bukti_pembayaran'],
        ]);
    }
}
