<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\assign_tests;
use App\Models\soals;
use App\Models\ujians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UjianController extends Controller
{
    public function index()
    {
        $title = 'Ujian | Cardion UIN Malang';
        $slug = 'ujian';

        $user = Auth::guard('peserta')->user();
        $assign_test = assign_tests::where('id_peserta', $user->id_peserta)->get();
        $data_ujian = [];
        foreach ($assign_test as $assign) {
            $data_ujian[] = $assign->ujian;
        }
        $ujians = collect($data_ujian);
        $sesis = [];
        foreach ($ujians as $ujian) {
            $sesis[] = $ujian->sesi->where('mulai', '>', now())->sortBy('mulai')->first();
        }
        // take fastest sesi
        $sesi = collect($sesis)->sortBy('mulai')->first();
        $ujian = ujians::where('id_ujian', $sesi->id_ujian)->first();
        return view('olimpiade.ujian.ujian', compact('title', 'slug', 'sesi', 'ujian', 'assign_test'));
    }

    public function detail(ujians $ujians)
    {
        $title = 'Detail Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        $sesi = $ujians->sesi->where('mulai', '>', now())->sortBy('mulai')->first();
        return view('olimpiade.ujian.detail-ujian', compact('title', 'slug', 'ujians', 'sesi'));
    }

    public function detail_start(ujians $ujians, $nosoal)
    {
        $title = 'Detail Ujian | Cardion UIN Malang';
        $slug = 'ujian';

        $sesi = $ujians->sesi->where('mulai', '>', now())->sortBy('mulai')->first();
        // take all soal from ujian
        $soals = soals::where('id_ujian', $ujians->id_ujian)->get();
        dd($soals[$nosoal]);
        return view('olimpiade.ujian.start-ujian', compact('title', 'slug', 'ujians', 'sesi', 'soals'));
    }

    public function hasil()
    {
        $title = 'Hasil Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        return view('olimpiade.ujian.hasil-ujian', compact('title', 'slug'));
    }

    public function history(){
        $title = 'History Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        
        return view('olimpiade.ujian.history-ujian', compact('title', 'slug'));
    }
}
