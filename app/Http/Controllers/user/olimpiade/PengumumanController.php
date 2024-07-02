<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\pembayarans;
use App\Models\pengumumans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    public function index()
    {
        $title = 'Pengumuman | Cardion UIN Malang';
        $slug = 'pengumuman';
        $user = Auth::guard('peserta')->user();
        if ($user->status_data == 'belum' || $user->status_pembayaran == 'belum') {
            toast('Lengkapi Data Diri dan Lakukan Pembayaran Terlebih Dahulu', 'info');
            return redirect()->route('user.dashboard');
        }
        $id_gelombang = pembayarans::where('id_peserta', $user->id_peserta)->first();
        $pengumuman_broadcast = pengumumans::where('event', $user->event)
        ->where('tipe_pengumuman', 'broadcast')
        ->where('status_pengumuman', 1)
        ->get();
        if($id_gelombang != null){
            $pengumuman_gelombang = pengumumans::where('event', $user->event)
            ->where('tipe_pengumuman', 'gelombang')
            ->where('id_gelombang', $id_gelombang->id_gelombang)
            ->where('status_pengumuman', 1)
            ->get();
        }else{
            $pengumuman_gelombang = [];
        }
        return view('olimpiade.pengumuman.pengumuman', compact('title', 'slug', 'pengumuman_broadcast', 'pengumuman_gelombang'));
    }

    public function detail(pengumumans $pengumumans){
        $title = 'Detail Pengumuman | Cardion UIN Malang';
        $slug = 'pengumuman';

        return view('olimpiade.pengumuman.detail-pengumuman', compact('title', 'slug', 'pengumumans'));
    }
}
