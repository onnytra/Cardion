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
        if ($peserta->status_data == 'belum' || $peserta->status_pembayaran == 'belum') {
            toast('Lengkapi Data Diri dan Lakukan Pembayaran Terlebih Dahulu', 'info');
            return redirect()->route('user.dashboard');
        }
        return view('olimpiade.sertifikat.sertifikat', compact('title', 'slug', 'peserta'));
    }

    public function cetak()
    {
        $peserta = Auth::guard('peserta')->user();
        if ($peserta->status_data == 'belum' || $peserta->status_pembayaran == 'belum') {
            toast('Lengkapi Data Diri dan Lakukan Pembayaran Terlebih Dahulu', 'info');
            return redirect()->route('user.dashboard');
        }
        return view('olimpiade.sertifikat.cetak-sertifikat', compact('peserta'));
    }

    public function show_peserta(pesertas $pesertas)
    {
        $peserta = Auth::guard('peserta')->user();
        return view('olimpiade.sertifikat.peserta', compact('peserta'));
    }
}
