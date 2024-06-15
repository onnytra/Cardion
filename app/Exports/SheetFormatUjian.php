<?php

namespace App\Exports;

use App\Models\view_nilai_ujian_pesertas_ranking;
use App\Models\view_status_jawban_pesertas_by_subyek_rangking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SheetFormatUjian implements FromArray, WithMultipleSheets
{
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        return $this->data;
    }

    public function sheets(): array
    {
        $sheets = [];
        foreach ($this->data as $key => $subyek)
        {
            $pesertas = view_nilai_ujian_pesertas_ranking::where('id_ujian', $subyek[0]->id_ujian)
                ->with('ujians')
                ->with('pesertas')
                ->get();
            $sheets[] = new UjianExport($pesertas, 'Total Score');
            foreach ($subyek as $key => $s)
            {
                $peserta = view_status_jawban_pesertas_by_subyek_rangking::where('id_subyek', $s->id_subyek)
                    ->with('subyeks')
                    ->with('pesertas')
                    ->get();
                $sheets[] = new UjianExport($peserta, $s->nama);
            }
        }
        return $sheets;
    }
}
