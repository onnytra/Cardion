<?php

namespace App\Exports;

use App\Models\pesertas;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SheetFormatPeserta implements FromArray, WithMultipleSheets
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
        foreach ($this->data as $key => $rayon) {
            foreach ($rayon as $key => $r) {
                $peserta = pesertas::where('id_rayon', $r->id_rayon)
                    ->where('status_pembayaran', 'sudah')
                    ->with('rayons')
                    ->get();
                $sheets[] = new PesertasExport($peserta, $r);
            }
        }
        return $sheets;
    }
}
