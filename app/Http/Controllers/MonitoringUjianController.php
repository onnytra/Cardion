<?php

namespace App\Http\Controllers;

use App\Models\assign_tests;
use App\Models\jawabans;
use App\Models\pesertas;
use Illuminate\Http\Request;
use App\Models\ujians;
use App\Models\view_nilai_ujian_pesertas;
use App\Models\view_status_jawaban_pesertas;

class MonitoringUjianController extends Controller
{
    public function show_tests_monitoring(){
        $title = 'Monitoring Ujian';
        $slug = 'monitoring-ujian';

        $function = new AssignTestsController();
        $tests = $function->get_tests();

        return view('admin.olimpiade.monitoring.monitoring-ujian', compact('title', 'slug', 'tests'));
    }

    public function monitoring_detail($id){
        $title = 'Detail Monitoring Ujian';
        $slug = 'monitoring-ujian';

        $ujian = ujians::find($id);
        $ujian->mulai = $ujian->sesi->min('mulai');
        $ujian->berakhir = $ujian->sesi->max('berakhir');
        $ujian->sesi = $ujian->sesi->count();
        $ujian->peserta = $ujian->peserta->count();
        $ujian->peserta_belum = $ujian->assign_tests->where('id_ujian', $id)->where('status_test', 'belum')->count();

        $pesertas_sudah = assign_tests::where('id_ujian', $id)->where('status_test', 'sudah')->get();
        foreach ($pesertas_sudah as $key => $value) {
            $value->nilai = view_nilai_ujian_pesertas::where('id_peserta', $value->id_peserta)->where('id_ujian', $value->id_ujian)->first();
        }
        $pesertas_belum = assign_tests::where('id_ujian', $id)->where('status_test', 'belum')->get();
        return view('admin.olimpiade.monitoring.detail-monitoring', compact('title', 'slug', 'ujian', 'pesertas_sudah', 'pesertas_belum'));
    }

    public function detail_peserta_monitoring(assign_tests $assign_tests){
        $title = 'Detail Peserta Monitoring Ujian';
        $slug = 'monitoring-ujian';

        $ujian = ujians::find($assign_tests->id_ujian);
        $ujian->mulai = $ujian->sesi->min('mulai');
        $ujian->berakhir = $ujian->sesi->max('berakhir');
        $ujian->sesi = $ujian->sesi->count();

        $nilai_ujian = view_nilai_ujian_pesertas::where('id_peserta', $assign_tests->id_peserta)->where('id_ujian', $assign_tests->id_ujian)->first();
        $detail_ujian = view_status_jawaban_pesertas::where('id_peserta', $assign_tests->id_peserta)->where('id_ujian', $assign_tests->id_ujian)->get();
        foreach ($detail_ujian as $key => $value) {
            $jawaban_benar = jawabans::where('id_soal', $value->id_soal)->where('status_jawaban', 1)->first();
            $value->jawaban_benar = $jawaban_benar;
        }
        $detail_ujian = $detail_ujian->sortBy('urutan_soal');
        return view('admin.olimpiade.monitoring.detail-peserta', compact('title', 'slug', 'assign_tests', 'ujian', 'nilai_ujian', 'detail_ujian'));
    }
}
