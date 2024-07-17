<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\assign_tests;
use App\Models\jawaban_users;
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
    private function getTimeZone($zona_waktu)
    {
        switch ($zona_waktu) {
            case 'WIB':
                return 'Asia/Jakarta';
            case 'WITA':
                return 'Asia/Makassar';
            case 'WIT':
                return 'Asia/Jayapura';
            default:
                return 'Asia/Jakarta';
        }
    }

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

        $userTimeZone = $this->getTimeZone($user->zona_waktu);
        $sesis = [];

        foreach ($assign_test as $key => $value) {
            $id_ujian = $value->id_ujian;
            $sesi_peserta = $value->id_sesi;
            $sesi_items = sesis::where('id_ujian', $id_ujian)->orderBy('mulai', 'asc')
                ->with('ujian')
                ->get();
            foreach ($sesi_items as $key => $sesi_value) {
                $sesi_value->nama_sesi = 'Sesi ' . ($key + 1);
                $sesi_value->id_sesi_peserta = $sesi_peserta;
                $sesi_value->mulai = Carbon::createFromFormat('Y-m-d H:i:s', $sesi_value->mulai, 'Asia/Jakarta')->setTimezone($userTimeZone);
                $sesi_value->berakhir = Carbon::createFromFormat('Y-m-d H:i:s', $sesi_value->berakhir, 'Asia/Jakarta')->setTimezone($userTimeZone);
                $sesis[] = $sesi_value;
            }
        }
        return view('olimpiade.ujian.ujian', compact('title', 'slug', 'sesis', 'today'));
    }


    public function detail(ujians $ujians, sesis $sesis)
    {
        $title = 'Detail Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        $sesi = $sesis;

        $user = Auth::guard('peserta')->user();
        $assign_test = assign_tests::where('id_ujian', $ujians->id_ujian)
            ->where('id_peserta', $user->id_peserta)
            ->first();
        $soal = soals::where('id_ujian', $ujians->id_ujian)->first();
        if ($soal == null) {
            toast('Soal Tidak Ditemukan', 'info');
            return redirect()->route('olimpiade.ujian');
        }

        if ($assign_test->id_sesi == null) {
            $id_sesi = $sesi->id_sesi;
            $assign_test->id_sesi = $id_sesi;
            $assign_test->save();
        } elseif ($assign_test->id_sesi != $sesi->id_sesi) {
            toast('Anda Mengikuti Ujian Ini Pada Sesi Yang Lain', 'info');
            return redirect()->route('olimpiade.ujian');
        } else {
            $sessionKey = 'soal_order_' . $ujians->id_ujian . '_' . $user->id_peserta;

            session()->forget($sessionKey);

            $userTimeZone = $this->getTimeZone($user->zona_waktu);
            $sesi->mulai = Carbon::createFromFormat('Y-m-d H:i:s', $sesi->mulai, 'Asia/Jakarta')->setTimezone($userTimeZone);
            $sesi->berakhir = Carbon::createFromFormat('Y-m-d H:i:s', $sesi->berakhir, 'Asia/Jakarta')->setTimezone($userTimeZone);

            return view('olimpiade.ujian.detail-ujian', compact('title', 'slug', 'ujians', 'sesi', 'soal'));
        }

        return abort(404);
    }


    public function detail_start(ujians $ujians, sesis $sesis, $soal_id)
    {
        $title = 'Ujian | Cardion UIN Malang';
        $slug = 'ujian';
        $peserta = Auth::guard('peserta')->user();
        
        $assign_test = assign_tests::where('id_ujian', $ujians->id_ujian)
            ->where('id_peserta', $peserta->id_peserta)
            ->first();
        if ($assign_test->status_kecurangan == 1) {
            return redirect()->route('olimpiade.cheat_detected');
        }

        $ujian = ujians::with('soal')->find($ujians->id_ujian);

        if (!$ujian) {
            toast('Ujian tidak ditemukan.', 'error');
            return redirect()->back();
        }

        $soal_acak = $ujian->soal_acak;

        $soals = $ujian->soal;

        if (!$soals || $soals->isEmpty()) {
            toast('Soal tidak ditemukan.', 'error');
            return redirect()->back();
        }

        $sessionKey = 'soal_order_' . $ujians->id_ujian . '_' . Auth::guard('peserta')->user()->id_peserta;

        if ($soal_acak) {
            if (session()->has($sessionKey)) {
                $orderedSoals = collect(session()->get($sessionKey));
                $soals = $soals->whereIn('id_soal', $orderedSoals->toArray())->sortBy(function ($item) use ($orderedSoals) {
                    return $orderedSoals->search($item->id_soal);
                });
            } else {
                $soals = $soals->shuffle();
                session()->put($sessionKey, $soals->pluck('id_soal')->toArray());
            }
        } else {
            $soals = $soals->sortBy('urutan_soal');
        }

        $soal = $soals->where('id_soal', $soal_id)->first();

        if (!$soal) {
            toast('Soal tidak ditemukan.', 'error');
            return redirect()->back();
        }

        $current_question_index = $soals->pluck('id_soal')->search($soal_id);

        if ($current_question_index === false) {
            toast('Soal tidak ditemukan dalam ujian ini.', 'error');
            return redirect()->back();
        }

        $current_question_number = $current_question_index + 1;
        $previous_soal_id = $current_question_number > 1 ? $soals[$current_question_index - 1]->id_soal : $soals->last()->id_soal;
        $next_soal_id = $current_question_number < $soals->count() ? $soals[$current_question_index + 1]->id_soal : $soals->first()->id_soal;

        $id_peserta = $peserta->id_peserta;
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
            'sesi' => $sesis,
            'title' => $title,
            'slug' => $slug
        ]);
    }

    public function simpan_jawaban(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id_jawaban' => 'required',
        ], [
            'id_jawaban.required' => 'Pilih jawaban terlebih dahulu.'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        jawaban_users::updateOrCreate(
            [
                'id_soal' => $request->id_soal,
                'id_ujian' => $request->id_ujian,
                'id_peserta' => Auth::guard('peserta')->user()->id_peserta
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

        $jawabanUser = jawaban_users::where('id_soal', $id_soal)
            ->where('id_ujian', $id_ujian)
            ->where('id_peserta', $id_peserta)
            ->first();

        if ($jawabanUser) {
            $jawabanUser->delete();
        }

        return redirect()->back()->with('success', 'Jawaban berhasil dihapus.');
    }

    public function finish_ujian(Request $request)
    {
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
        $soals = soals::where('id_ujian', $ujians->id_ujian)->get();
        foreach ($soals as $key => $value) {
            $jawaban_user = view_status_jawaban_pesertas::where('id_soal', $value->id_soal)
                ->where('id_peserta', $user->id_peserta)
                ->where('id_ujian', $ujians->id_ujian)
                ->first();
            $jawaban = $jawaban_user == null ? 'Tidak Ada Jawaban' : $jawaban_user->jawaban;
            $value->jawaban = $jawaban;
            $jawaban_status = $jawaban_user == null ? 'kosong' : $jawaban_user->jawaban_status;
            $value->jawaban_status = $jawaban_status;
        }
        $nilai_user = view_nilai_ujian_pesertas::where('id_peserta', $user->id_peserta)
            ->where('id_ujian', $ujians->id_ujian)
            ->first();
        $ujians->nilai = $nilai_user->total_score;
        return view('olimpiade.ujian.hasil-ujian', compact('title', 'slug', 'soals', 'ujians'));
    }

    public function history()
    {
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

    public function kumpulkan_ujian(ujians $ujians)
    {
        $title = 'Ujian | Cardion UIN Malang';
        $slug = 'ujian';

        $user = Auth::guard('peserta')->user();
        $today = Carbon::now();

        $assign_test = assign_tests::where('id_peserta', $user->id_peserta)
            ->where('id_ujian', $ujians->id_ujian)
            ->where('status_test', 'belum')
            ->where('id_sesi', !null)
            ->first();

        if ($assign_test == null) {
            toast('Sesi Ujian Anda Tidak Ditemukan', 'info');
            return redirect()->route('olimpiade.ujian');
        }

        $assign_test->status_test = 'sudah';
        $assign_test->save();

        toast('Ujian Berhasil Dikumpulkan', 'success');
        return redirect()->route('olimpiade.ujian');
    }

    public function cheat_detected()
    {
        $title = 'Cheat Detected | Cardion UIN Malang';
        $slug = 'ujian';

        return view('olimpiade.ujian.cheat', compact('title', 'slug'));
    }

    public function update_assign_test_cheat(Request $request)
    {
        $id_ujian = $request->id_ujian;
        $id_peserta = Auth::guard('peserta')->user()->id_peserta;

        $assign_test = assign_tests::where('id_ujian', $id_ujian)
            ->where('id_peserta', $id_peserta)
            ->first();

        $assign_test->status_kecurangan = 1;
        $assign_test->alasan_kecurangan = $request->alasan_kecurangan;
        $assign_test->save();
    }

    public function update_assign_test_cheat_reset(assign_tests $assign_tests)
    {
        $assign_tests->status_kecurangan = 0;
        $assign_tests->alasan_kecurangan = null;
        $assign_tests->save();

        toast('Data Berhasil Direset', 'success');
        return redirect()->back();
    }
}
