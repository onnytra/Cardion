<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class PenilaianKaryaExport implements FromCollection, WithHeadings, WithMapping, WithTitle
{
    protected $karyas;

    public function __construct($karyas)
    {
        $this->karyas = $karyas;
    }

    public function collection()
    {
        return $this->karyas;
    }

    public function headings(): array
    {
        return [
            'Nomor Peserta',
            'Nama Tim',
            'Asal Sekolah',
            'Tanggal Upload',
            'Nilai',
            'Keterangan Nilai',
        ];
    }

    public function map($karyas): array
    {
        return [
            $karyas->peserta->nomor,
            $karyas->peserta->nama_team,
            $karyas->peserta->sekolah,
            $karyas->tanggal,
            $karyas->nilai,
            $karyas->keterangan_nilai,
        ];
    }

    public function title(): string
    {
        return 'Penilaian Karya';
    }
}
