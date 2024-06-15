<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use App\Exports\SheetFormatPeserta;
use App\Exports\SheetFormatPesertaBelumLunas;
use App\Exports\SheetFormatUjian;
use App\Models\cabangs;
use App\Models\rayons;
use App\Models\subyeks;
use App\Models\ujians;
use App\Models\view_status_jawban_pesertas_by_subyek_rangking;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    protected $event;

    public function __construct()
    {
        $route = request()->route();

        if ($route) {
            $action = $route->getAction();
            $this->event = $action['event'] ?? null;
        } else {
            $this->event = null;
        }
    }

    public function pesertalunas()
    {
        $cabangs = cabangs::where('event', $this->event)->get();
        $rayon = [];
        foreach ($cabangs as $cabang) {
            $rayon[] = rayons::where('id_cabang', $cabang->id_cabang)->get();
        }
        return Excel::download(new SheetFormatPeserta($rayon), 'peserta-sudah-bayar.xlsx');
    }

    public function pesertalunas_bycabang(cabangs $cabangs)
    {
        $rayon = rayons::where('id_cabang', $cabangs->id_cabang)->get();
        return Excel::download(new SheetFormatPeserta([$rayon]), 'peserta-sudah-bayar-'.$cabangs->cabang.'.xlsx');
    }

    public function pesertabelumlunas()
    {
        $cabangs = cabangs::where('event', $this->event)->get();
        $rayon = [];
        foreach ($cabangs as $cabang) {
            $rayon[] = rayons::where('id_cabang', $cabang->id_cabang)->get();
        }
        return Excel::download(new SheetFormatPesertaBelumLunas($rayon), 'peserta-belum-bayar.xlsx');
    }

    public function ujianpeserta(ujians $ujians)
    {
        $subyek = subyeks::where('id_ujian', $ujians->id_ujian)->get();
        return Excel::download(new SheetFormatUjian([$subyek]), 'ujian-'.$ujians->judul.'.xlsx');
    }
}
