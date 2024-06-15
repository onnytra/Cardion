<?php

namespace App\Exports;

use App\Models\pesertas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;

class PesertasExport implements FromCollection, WithHeadings, WithTitle, WithMapping
{
    use Exportable;

    protected $peserta;
    protected $rayon;

    public function __construct($peserta, $rayon)
    {
        $this->peserta = $peserta;
        $this->rayon = $rayon;
    }

    public function collection()
    {
        return $this->peserta;
    }

    public function headings(): array
    {
        return [
            'Nama Ketua',
            'Email Ketua',
            'No. Telepon Ketua',
            'Nama Tim',
            'Rayon',
            'Asal Sekolah',
            'Anggota 1',
            'No. Telepon Anggota 1',
            'Anggota 2',
            'No. Telepon Anggota 2',
            'Nomor Peserta',
        ];
    }

    public function map($peserta): array
    {
        return [
            $peserta->nama,
            $peserta->email,
            $peserta->telepon,
            $peserta->nama_team,
            $peserta->rayons->rayon,
            $peserta->sekolah,
            $peserta->anggota_pertama,
            $peserta->telepon_anggota_pertama,
            $peserta->anggota_kedua,
            $peserta->telepon_anggota_kedua,
            $peserta->nomor,
        ];
    }

    public function title(): string
    {
        return $this->rayon->rayon;
    }
}
