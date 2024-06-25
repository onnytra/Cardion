<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\pesertas;
use Illuminate\Support\Facades\Auth;

class SertifikatController extends Controller
{
    public function index()
    {
        $title = 'Cardion UIN Malang';
        $slug = 'sertifikat';
        $peserta = Auth::guard('peserta')->user();
        return view('olimpiade.sertifikat.sertifikat', compact('title', 'slug', 'peserta'));
    }

    public function cetak()
    {
        ini_set('max_execution_time', 300); // 300 seconds = 5 minutes
        ini_set('memory_limit', '512M'); // Set memory limit to 512M

        $peserta = Auth::guard('peserta')->user();
        $url = route('user.sertifikat_peserta', $peserta->id_peserta);
        $pdf = \PDF::loadView('olimpiade.sertifikat.cetak-sertifikat', compact('peserta', 'url'));
        return $pdf->stream('sertifikat-peserta.pdf');
    }


    public function show_peserta(pesertas $pesertas)
    {
        $peserta = Auth::guard('peserta')->user();
        return view('olimpiade.sertifikat.peserta', compact('peserta'));
    }
}
