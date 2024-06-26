<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\pesertas;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class CetakKartuController extends Controller
{
    public function index()
    {
        $title = 'Cardion UIN Malang';
        $slug = 'cetak kartu';
        $peserta = Auth::guard('peserta')->user();
        return view('olimpiade.cetak_kartu.cetak-kartu', compact('title', 'slug', 'peserta'));
    }
    
    public function cetak(){
        $peserta = Auth::guard('peserta')->user();
        $url = route('user.kartu_peserta', $peserta->id_peserta);
        return view('olimpiade.cetak_kartu.kartu', compact('peserta', 'url'));
    }

    public function show_peserta(pesertas $pesertas)
    {
        $peserta = Auth::guard('peserta')->user();
        return view('olimpiade.cetak_kartu.peserta', compact('peserta'));
    }
}
