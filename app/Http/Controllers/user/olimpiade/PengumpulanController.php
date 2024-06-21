<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\assign_tests;
use App\Models\karyas;
use App\Models\pengumpulan_karyas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengumpulanController extends Controller
{
    public function index(){
        $title = 'Public Poster | Cardion UIN Malang';
        $slug = 'pengumpulan-karya';

        $user = Auth::guard('peserta')->user();
        $today = Carbon::now();
        if ($user->status_data == 'belum' || $user->status_pembayaran == 'belum') {
            toast('Lengkapi Data Diri dan Lakukan Pembayaran Terlebih Dahulu', 'info');
            return redirect()->route('user.dashboard');
        }
        $closest_pengumpulan_karya = pengumpulan_karyas::join('assign_tests', 'pengumpulan_karyas.id_pengumpulan', '=', 'assign_tests.id_pengumpulan')
            ->where('assign_tests.id_peserta', $user->id_peserta)
            ->where('pengumpulan_karyas.status_pengumpulan', 1)
            // ->where('pengumpulan_karyas.berakhir', '>=', $today)
            ->with('assign_tests')
            ->orderBy('pengumpulan_karyas.mulai', 'asc')
            ->get(['pengumpulan_karyas.*']);
            // check closest pengumpulan
            if($closest_pengumpulan_karya->isEmpty()){
                $closest_pengumpulan_karya = null;
            }
        return view('publicposter.pengumpulan-karya.pengumpulan-karya', compact('title', 'slug', 'closest_pengumpulan_karya', 'today'));
    }

    public function create(pengumpulan_karyas $pengumpulan_karyas){
        $title = 'Public Poster | Cardion UIN Malang';
        $slug = 'pengumpulan';

        $user = Auth::guard('peserta')->user();

        return view('publicposter.pengumpulan-karya.add-pengumpulan-karya', compact('title', 'slug', 'user', 'pengumpulan_karyas'));
    }

    public function store(Request $request){
        $user = Auth::guard('peserta')->user();
        $validation = Validator::make($request->all(), [
            'karya_poster' => 'required|mimes:jpeg,jpg,png|max:2048',
            'surat' => 'required|mimes:pdf|max:2048',
            'essay' => 'required|mimes:pdf|max:2048',
        ],[
            'karya_poster.required' => 'Karya Poster harus diisi',
            'karya_poster.mimes' => 'Karya Poster harus berupa file: jpeg, jpg, png',
            'karya_poster.max' => 'Karya Poster maksimal 2MB',
            'surat.required' => 'Surat Pernyataan harus diisi',
            'surat.mimes' => 'Surat Pernyataan harus berupa file: pdf',
            'surat.max' => 'Surat Pernyataan maksimal 2MB',
            'essay.required' => 'Essay harus diisi',
            'essay.mimes' => 'Essay harus berupa file: pdf',
            'essay.max' => 'Essay maksimal 2MB',
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }
        // check time of pengumpulan
        $today = Carbon::now();
        $pengumpulan = pengumpulan_karyas::where('id_pengumpulan', $request->id_pengumpulan)->first();
        if($today < $pengumpulan->mulai ){
            toast('Pengumpulan Belum Dibuka', 'info');
            return redirect()->route('poster.karya');
        }elseif($today > $pengumpulan->berakhir){
            toast('Pengumpulan Sudah Ditutup', 'info');
            return redirect()->route('poster.karya');
        }
        $karya_poster = $request->file('karya_poster');
        $surat = $request->file('surat');
        $essay = $request->file('essay');

        $karya_poster_name = 'gambar/'.time().'_'.$user->id_peserta;
        $surat_name = 'surat/'.time().'_'.$user->id_peserta;
        $essay_name = 'essay/'.time().'_'.$user->id_peserta;

        $karya_poster->storeAs('public/karya', $karya_poster_name);
        $surat->storeAs('public/karya', $surat_name);
        $essay->storeAs('public/karya', $essay_name);

        $karya = new karyas();
        $karya->id_peserta = $user->id_peserta;
        $karya->id_pengumpulan = $request->id_pengumpulan;
        $karya->karya = $karya_poster_name;
        $karya->surat_originalitas = $surat_name;
        $karya->essay_karya = $essay_name;
        $karya->tanggal = Carbon::now();
        $karya->save();

        // edit assign test
        $assign_test = assign_tests::where('id_peserta', $user->id_peserta)
            ->where('id_pengumpulan', $request->id_pengumpulan)
            ->first();
        $assign_test->status_test = 'sudah';
        $assign_test->save();
        toast('Karya Berhasil Diunggah', 'success');
        return redirect()->route('poster.karya');
    }

    public function show (pengumpulan_karyas $pengumpulan_karyas){
        $title = 'Public Poster | Cardion UIN Malang';
        $slug = 'pengumpulan-karya';

        $user = Auth::guard('peserta')->user();
        $karya = karyas::where('id_peserta', $user->id_peserta)
            ->where('id_pengumpulan', $pengumpulan_karyas->id_pengumpulan)
            ->first();
        return view('publicposter.pengumpulan-karya.show-pengumpulan-karya', compact('title', 'slug', 'pengumpulan_karyas', 'user', 'karya'));
    }
}
