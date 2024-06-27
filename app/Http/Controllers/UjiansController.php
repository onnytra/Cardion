<?php

namespace App\Http\Controllers;

use App\Models\ujians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UjiansController extends Controller
{
    public $event;

    public function __construct()
    {
        $route = request()->route();

        if ($route) {
            $action = $route->getAction();
            $this->event = $action['event'] ?? null;
        } else {
            $this->event = null;
        }
    }
    public function index()
    {
        $title = 'Ujian';
        $slug = 'ujian';

        $delete = 'Delete Ujian';
        $delete_message = 'Anda yakin ingin menghapus ujian ini ?';
        confirmDelete($delete, $delete_message);

        $ujians = ujians::all();
        $ujians->map(function ($ujian) {
            $ujian->mulai = $ujian->sesi->min('mulai');
            $ujian->berakhir = $ujian->sesi->max('berakhir');
        });
        return view('admin/olimpiade/ujian/ujian', compact('ujians', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Ujian';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/ujian/add-ujian', compact('title', 'slug'));
        } else{
            toast('Ada Kesalahan, Tanyakan Kepada Admin');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'judul' => 'required|max:30',
            'group_wa' => 'max:100',
            'durasi' => 'required | numeric | min:1 | max:999',
            'total_soal' => 'required | numeric | min:1 | max:999',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Judul maksimal 30 karakter',
            'group_wa.max' => 'Group WA maksimal 100 karakter',
            'durasi.required' => 'Durasi harus diisi',
            'durasi.numeric' => 'Durasi harus berupa angka',
            'durasi.min' => 'Durasi minimal 1 menit',
            'durasi.max' => 'Durasi maksimal 999 menit',
            'total_soal.required' => 'Total soal harus diisi',
            'total_soal.numeric' => 'Total soal harus berupa angka',
            'total_soal.min' => 'Total soal minimal 1 soal',
            'total_soal.max' => 'Total soal maksimal 999 soal',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        $ujians = new ujians();
        $ujians->id_ujian = date('His').rand(10,99);
        $ujians->judul = $request->judul;
        $ujians->deskripsi = $request->deskripsi;
        $ujians->peraturan = $request->peraturan;
        $ujians->group_wa = $request->group_wa;
        $ujians->durasi = $request->durasi;
        $ujians->total_soal = $request->total_soal;
        $ujians->benar = $request->benar;
        $ujians->salah = $request->salah;
        $ujians->kosong = $request->kosong;
        $ujians->soal_acak = $request->soal_acak ? 1 : 0;
        $ujians->status_ujian = $request->status_ujian ? 1 : 0;
        $ujians->tampilkan_jawaban = $request->tampilkan_jawaban ? 1 : 0;
        $ujians->tampilkan_nilai = $request->tampilkan_nilai ? 1 : 0;
        $ujians->save();

        toast('Ujian Berhasil Ditambahkan','success');
        return redirect()->route($this->event.'.ujian.index');
    }

    public function show(ujians $ujians)
    {
        //
    }

    public function edit(ujians $ujians)
    {
        $title = 'Edit Ujian';
        $slug = 'edit';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/ujian/edit-ujian', compact('ujians', 'title', 'slug'));
        } else{
            toast('Ada Kesalahan, Tanyakan Kepada Admin');
            return redirect()->back();
        }
    }

    public function update(Request $request, ujians $ujians)
    {
        $validate = Validator::make($request->all(), [
            'judul' => 'required|max:30',
            'group_wa' => 'max:100',
            'durasi' => 'required | numeric | min:1 | max:999',
            'total_soal' => 'required | numeric | min:1 | max:999',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Judul maksimal 30 karakter',
            'group_wa.max' => 'Group WA maksimal 100 karakter',
            'durasi.required' => 'Durasi harus diisi',
            'durasi.numeric' => 'Durasi harus berupa angka',
            'durasi.min' => 'Durasi minimal 1 menit',
            'durasi.max' => 'Durasi maksimal 999 menit',
            'total_soal.required' => 'Total soal harus diisi',
            'total_soal.numeric' => 'Total soal harus berupa angka',
            'total_soal.min' => 'Total soal minimal 1 soal',
            'total_soal.max' => 'Total soal maksimal 999 soal',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        $ujians->judul = $request->judul;
        $ujians->deskripsi = $request->deskripsi;
        $ujians->peraturan = $request->peraturan;
        $ujians->group_wa = $request->group_wa;
        $ujians->durasi = $request->durasi;
        $ujians->total_soal = $request->total_soal;
        $ujians->benar = $request->benar;
        $ujians->salah = $request->salah;
        $ujians->kosong = $request->kosong;
        $ujians->soal_acak = $request->soal_acak ? 1 : 0;
        $ujians->status_ujian = $request->status_ujian ? 1 : 0;
        $ujians->tampilkan_jawaban = $request->tampilkan_jawaban ? 1 : 0;
        $ujians->tampilkan_nilai = $request->tampilkan_nilai ? 1 : 0;
        $ujians->save();
        toast('Ujian Berhasil Diperbarui','success');
        return redirect()->route($this->event.'.ujian.index');
    }

    public function destroy(ujians $ujians)
    {
        $ujians->delete();
        toast('Ujian Berhasil Dihapus','success');
        return redirect()->route($this->event.'.ujian.index');
    }
}
