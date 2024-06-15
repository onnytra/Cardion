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
        $id_gelombang = pembayarans::where('id_peserta', $user->id_peserta)->first();
        $pengumuman_broadcast = pengumumans::where('tipe_pengumuman', 'broadcast')
        ->where('status_pengumuman', 1)
        ->get();
        $pengumuman_gelombang = pengumumans::where('tipe_pengumuman', 'gelombang')
        ->where('id_gelombang', $id_gelombang->id_gelombang)
        ->where('status_pengumuman', 1)
        ->get();
        return view('olimpiade.pengumuman.pengumuman', compact('title', 'slug', 'pengumuman_broadcast', 'pengumuman_gelombang'));
    }
}
