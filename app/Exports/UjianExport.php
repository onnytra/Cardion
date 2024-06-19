<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;

class UjianExport implements FromCollection, WithHeadings, WithTitle, WithMapping
{
    use Exportable;

    protected $peserta;
    protected $subyek;

    public function __construct($peserta, $subyek)
    {
        $this->peserta = $peserta;
        $this->subyek = $subyek;
    }

    public function collection()
    {
        return $this->peserta;
    }

    public function headings(): array
    {
        return [
            'Nomor Peserta',
            'Nama Tim',
            'Asal Sekolah',
            'Benar',
            'Salah',
            'Kosong',
            'Nilai Total',
            'Peringkat'
        ];
    }

    public function map($peserta): array
    {
        return [
            $peserta->pesertas->nomor,
            $peserta->pesertas->nama_team,
            $peserta->pesertas->sekolah,
            $peserta->total_benar,
            $peserta->total_salah,
            $peserta->total_kosong,
            $peserta->total_score,
            $peserta->peringkat,
        ];
    }

    public function title(): string
    {
        return $this->subyek;
    }
}
