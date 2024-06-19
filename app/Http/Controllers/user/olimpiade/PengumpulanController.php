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
        $today = Carbon::today();

        $closest_pengumpulan_karya = pengumpulan_karyas::join('assign_tests', 'pengumpulan_karyas.id_pengumpulan', '=', 'assign_tests.id_pengumpulan')
            ->where('assign_tests.id_peserta', $user->id_peserta)
            ->where('assign_tests.status_test', 'belum')
            ->where('pengumpulan_karyas.mulai', '>=', $today)
            ->orderBy('pengumpulan_karyas.mulai', 'asc')
            ->first(['pengumpulan_karyas.*']);

            $karya = karyas::where('id_peserta', $user->id_peserta)->where('id_pengumpulan', $closest_pengumpulan_karya->id_pengumpulan)->first();
        return view('publicposter.pengumpulan-karya.pengumpulan-karya', compact('title', 'slug', 'closest_pengumpulan_karya', 'karya'));
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

        $karya_poster = $request->file('karya_poster');
        $surat = $request->file('surat');
        $essay = $request->file('essay');

        $maxLength = 50 - strlen('gambar/'.time().'_');
        $karya_poster_name = 'gambar/'.time().'_'.substr($karya_poster->getClientOriginalName(), 0, $maxLength);
        $surat_name = 'surat/'.time().'_'.substr($surat->getClientOriginalName(), 0, $maxLength);
        $essay_name = 'essay/'.time().'_'.substr($essay->getClientOriginalName(), 0, $maxLength);

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

        toast('Karya Berhasil Diunggah', 'success');
        return redirect()->route('poster.karya');
    }
}
