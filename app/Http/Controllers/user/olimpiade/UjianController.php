<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\assign_tests;
use App\Models\jawaban_users;
use App\Models\jawabans;
use App\Models\sesis;
use App\Models\soals;
use App\Models\ujians;
use App\Models\view_nilai_ujian_pesertas;
use App\Models\view_status_jawaban_pesertas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class UjianController extends Controller
{
    public function index()
    {
        $title = 'Ujian | Cardion UIN Malang';
        $slug = 'ujian';

        $user = Auth::guard('peserta')->user();
        $today = Carbon::now();
        
        if ($user->status_data == 'belum' || $user->status_pembayaran == 'belum') {
            toast('Lengkapi Data Diri dan Lakukan Pembayaran Terlebih Dahulu', 'info');
            return redirect()->route('user.dashboard');
        }
        
        $assign_test = assign_tests::where('id_peserta', $user->id_peserta)
        ->where('status_test', 'belum')
        ->with('ujian')
        ->get();
        if ($assign_test->isEmpty()) {
            $sesis = null;
            toast('Tidak Ada Ujian Yang Tersedia', 'info');
            return view('olimpiade.ujian.ujian', compact('title', 'slug', 'sesis'));
        }
        foreach ($assign_test as $key => $value) {
            $id_ujian = $value->id_ujian;
            $sesis = sesis::where('id_ujian', $id_ujian)->orderBy('mulai', 'asc')
            ->with('ujian')
            ->get();
        }
        return view('olimpiade.ujian.ujian', compact('title', 'slug', 'sesis', 'today'));
    }

    public function detail(ujians $ujians, sesis $sesis)
    {
        $title = 'Detail Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        $sesi = $sesis;
        
        // Nama kunci sesi untuk menyimpan urutan soal
        $sessionKey = 'soal_order_' . $ujians->id_ujian . '_' . Auth::guard('peserta')->user()->id_peserta;
        
        // Hapus sesi yang terkait
        session()->forget($sessionKey);

        return view('olimpiade.ujian.detail-ujian', compact('title', 'slug', 'ujians', 'sesi'));
    }


    public function detail_start(ujians $ujians, sesis $sesis, $soal_id)
    {
        $title = 'Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        
        // Muat data ujian dengan relasi soal menggunakan Eager Loading
        $ujian = ujians::with('soal')->find($ujians->id_ujian);
        
        if (!$ujian) {
            toast('Ujian tidak ditemukan.', 'error');
            return redirect()->back();
        }
        
        // Periksa apakah soal harus diacak
        $soal_acak = $ujian->soal_acak;
        
        // Ambil soal
        $soals = $ujian->soal;

        if (!$soals || $soals->isEmpty()) {
            toast('Soal tidak ditemukan.', 'error');
            return redirect()->back();
        }

        // Nama kunci sesi untuk menyimpan urutan soal
        $sessionKey = 'soal_order_' . $ujians->id_ujian . '_' . Auth::guard('peserta')->user()->id_peserta;

        if ($soal_acak) {
            // Periksa apakah urutan soal sudah ada di sesi
            if (session()->has($sessionKey)) {
                // Ambil urutan soal dari sesi
                $orderedSoals = collect(session()->get($sessionKey));
                // Urutkan soal sesuai urutan yang ada di sesi
                $soals = $soals->whereIn('id_soal', $orderedSoals->toArray())->sortBy(function ($item) use ($orderedSoals) {
                    return $orderedSoals->search($item->id_soal);
                });
            } else {
                // Acak soal dan simpan urutannya dalam sesi
                $soals = $soals->shuffle();
                session()->put($sessionKey, $soals->pluck('id_soal')->toArray());
            }
        } else {
            // Urutkan soal berdasarkan urutan_soal
            $soals = $soals->sortBy('urutan_soal');
        }

        $soal = $soals->where('id_soal', $soal_id)->first();
        
        if (!$soal) {
            toast('Soal tidak ditemukan.', 'error');
            return redirect()->back();
        }

        // Cari nomor urutan soal saat ini
        $current_question_index = $soals->pluck('id_soal')->search($soal_id);

        if ($current_question_index === false) {
            toast('Soal tidak ditemukan dalam ujian ini.', 'error');
            return redirect()->back();
        }

        $current_question_number = $current_question_index + 1;

        // Tentukan previous_soal_id dan next_soal_id dengan validasi
        $previous_soal_id = $current_question_number > 1 ? $soals[$current_question_index - 1]->id_soal : $soals->last()->id_soal;
        $next_soal_id = $current_question_number < $soals->count() ? $soals[$current_question_index + 1]->id_soal : $soals->first()->id_soal;

        // Muat jawaban yang sudah dipilih oleh pengguna untuk soal ini
        $id_peserta = Auth::guard('peserta')->user()->id_peserta;
        $jawaban_user = jawaban_users::where('id_soal', $soal_id)
                                    ->where('id_ujian', $ujians->id_ujian)
                                    ->where('id_peserta', $id_peserta)
                                    ->first();

        $selected_jawaban_id = $jawaban_user ? $jawaban_user->id_jawaban : null;
        return view('olimpiade.ujian.start-ujian', [
            'ujian' => $ujian,
            'soals' => $soals,
            'soal' => $soal,
            'current_question_number' => $current_question_number,
            'previous_soal_id' => $previous_soal_id,
            'next_soal_id' => $next_soal_id,
            'selected_jawaban_id' => $selected_jawaban_id,
            'sesi' => $sesis, // Tambahkan sesi ke dalam data yang dikirimkan ke view
            'title' => $title,
            'slug' => $slug
        ]);
    }




    // public function detail_start(ujians $ujians, sesis $sesis, $soal_id)
    // {
    //     $title = 'Ujian | Cardion UIN Malang';
    //     $slug = 'ujian';
        
    //     // Muat data ujian dengan relasi soal menggunakan Eager Loading
    //     $ujian = ujians::with('soal')->find($ujians->id_ujian);
        
    //     if (!$ujian) {
    //         toast('Ujian tidak ditemukan.', 'error');
    //         return redirect()->back();
    //     }
        
    //     $soals = $ujian->soal;

    //     if (!$soals || $soals->isEmpty()) {
    //         toast('Soal tidak ditemukan.', 'error');
    //         return redirect()->back();
    //     }

    //     $soal = $soals->where('id_soal', $soal_id)->first();
        
    //     if (!$soal) {
    //         toast('Soal tidak ditemukan.', 'error');
    //         return redirect()->back();
    //     }

    //     // Cari nomor urutan soal saat ini
    //     $current_question_index = $soals->search(function ($item) use ($soal_id) {
    //         return $item->id_soal == $soal_id;
    //     });

    //     if ($current_question_index === false) {
    //         toast('Soal tidak ditemukan dalam ujian ini.', 'error');
    //         return redirect()->back();
    //     }

    //     $current_question_number = $current_question_index + 1;

    //     // Tentukan previous_soal_id dan next_soal_id dengan validasi
    //     $previous_soal_id = $current_question_number > 1 ? $soals[$current_question_index - 1]->id_soal : $soals->last()->id_soal;
    //     $next_soal_id = $current_question_number < $soals->count() ? $soals[$current_question_index + 1]->id_soal : $soals->first()->id_soal;

    //     // Muat jawaban yang sudah dipilih oleh pengguna untuk soal ini
    //     $id_peserta = Auth::guard('peserta')->user()->id_peserta;
    //     $jawaban_user = jawaban_users::where('id_soal', $soal_id)
    //                                 ->where('id_ujian', $ujians->id_ujian)
    //                                 ->where('id_peserta', $id_peserta)
    //                                 ->first();

    //     $selected_jawaban_id = $jawaban_user ? $jawaban_user->id_jawaban : null;
    //     return view('olimpiade.ujian.start-ujian', [
    //         'ujian' => $ujian,
    //         'soals' => $soals,
    //         'soal' => $soal,
    //         'current_question_number' => $current_question_number,
    //         'previous_soal_id' => $previous_soal_id,
    //         'next_soal_id' => $next_soal_id,
    //         'selected_jawaban_id' => $selected_jawaban_id,
    //         'sesi' => $sesis, // Tambahkan sesi ke dalam data yang dikirimkan ke view
    //         'title' => $title,
    //         'slug' => $slug
    //     ]);
    // }

    public function simpan_jawaban(Request $request){
        $validate = Validator::make($request->all(), [
            'id_jawaban' => 'required',
        ],[
            'id_jawaban.required' => 'Pilih jawaban terlebih dahulu.'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        jawaban_users::updateOrCreate(
            [
                'id_soal' => $request->id_soal,
                'id_ujian' => $request->id_ujian,
                'id_peserta' => $request->id_peserta
            ],
            [
                'id_jawaban' => $request->id_jawaban
            ]
        );
    
        return redirect()->back()->with('success', 'Jawaban berhasil disimpan.');
    }

    public function hapus_jawaban(Request $request)
    {
        $id_soal = $request->id_soal;
        $id_ujian = $request->id_ujian;
        $id_peserta = Auth::guard('peserta')->user()->id_peserta;

        // Cari jawaban yang sudah ada untuk dihapus
        $jawabanUser = jawaban_users::where('id_soal', $id_soal)
                                    ->where('id_ujian', $id_ujian)
                                    ->where('id_peserta', $id_peserta)
                                    ->first();

        if ($jawabanUser) {
            $jawabanUser->delete();
        }

        return redirect()->back()->with('success', 'Jawaban berhasil dihapus.');
    }

    public function finish_ujian(Request $request){
        $id_ujian = $request->id_ujian;
        $id_peserta = Auth::guard('peserta')->user()->id_peserta;

        $assign_test = assign_tests::where('id_ujian', $id_ujian)
                                    ->where('id_peserta', $id_peserta)
                                    ->first();

        $assign_test->status_test = 'sudah';
        $assign_test->save();

        toast('Ujian Berhasil Dikerjakan', 'success');
        return redirect()->route('olimpiade.ujian');
    }

    public function hasil(ujians $ujians)
    {
        $title = 'Hasil Ujian | Cardion UIN Malang';
        $slug = 'ujian';

        $user = Auth::guard('peserta')->user();
        // take soal and user jawaban
        $soals = soals::where('id_ujian', $ujians->id_ujian)->get();
        foreach ($soals as $key => $value) {
            // $jawaban_user = jawaban_users::where('id_soal', $value->id_soal)
            // ->where('id_peserta', $user->id_peserta)
            // ->where('id_ujian', $ujians->id_ujian)
            // ->first();
            // $jawaban = $jawaban_user== null ? 'Tidak Ada Jawaban' : $jawaban_user->jawaban->jawaban;
            // $value->jawaban = $jawaban;
            $jawaban_user = view_status_jawaban_pesertas::where('id_soal', $value->id_soal)
            ->where('id_peserta', $user->id_peserta)
            ->where('id_ujian', $ujians->id_ujian)
            ->first();
            $jawaban = $jawaban_user == null ? 'Tidak Ada Jawaban' : $jawaban_user->jawaban;
            $value->jawaban = $jawaban;
            $jawaban_status = $jawaban_user == null ? 'kosong' : $jawaban_user->jawaban_status;
            $value->jawaban_status = $jawaban_status;
            // $jawaban_benar = jawabans::where('id_soal', $value->id_soal)
            // ->where('status_jawaban', 1)
            // ->first();
            // $value->jawaban_benar = $jawaban_benar->jawaban;
        }
        $nilai_user = view_nilai_ujian_pesertas::where('id_peserta', $user->id_peserta)
        ->where('id_ujian', $ujians->id_ujian)
        ->first();
        $ujians->nilai = $nilai_user->total_score;
        return view('olimpiade.ujian.hasil-ujian', compact('title', 'slug', 'soals', 'ujians'));
    }

    public function history(){
        $title = 'History Ujian | Cardion UIN Malang';
        $slug = 'ujian';

        $user = Auth::guard('peserta')->user();
        $today = Carbon::now();

        $assign_test = assign_tests::where('id_peserta', $user->id_peserta)
        ->where('status_test', 'sudah')
        ->with('ujian')
        ->get();
        if ($assign_test->isEmpty()) {
            $assign_test = null;
            toast('Anda Belum Menyelesaikan Ujian', 'info');
        }

        return view('olimpiade.ujian.history-ujian', compact('title', 'slug', 'today', 'assign_test'));
    }
}
