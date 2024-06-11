<?php

namespace App\Http\Controllers;

use App\Models\jawabans;
use App\Models\soals;
use App\Models\ujians;
use App\Models\subyeks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SoalsController extends Controller
{
    public function index(ujians $ujians)
    {
        $title = 'Soal';
        $slug = 'soal';

        $delete = 'Delete Soal';
        $delete_message = 'Anda yakin ingin menghapus soal ini ?';
        confirmDelete($delete, $delete_message);

        $soals = soals::where('id_ujian', $ujians->id_ujian)->get();
        $soals = $soals->map(function ($item) {
            $item->jawabans = jawabans::where('id_soal', $item->id_soal)->get();
            return $item;
        });
        $ujians = $ujians;
        $ujians->mulai = $ujians->sesi->min('mulai');
        $ujians->berakhir = $ujians->sesi->max('berakhir');
        return view('admin/olimpiade/ujian/soal/soal-ujian', compact('ujians','soals', 'title', 'slug'));

    }

    public function create(ujians $ujians)
    {
        $title = 'Tambah Soal';
        $slug = 'add';
        $total_soal = soals::where('id_ujian', $ujians->id_ujian)->count();
        if ($total_soal == $ujians->total_soal) {
            toast('Soal Sudah Mencapai Batas Maksimal', 'error');
            return redirect()->back();
        }
        $subyeks = subyeks::where('id_ujian', $ujians->id_ujian)->get();
        return view('admin/olimpiade/ujian/soal/add-soal', compact('subyeks','ujians','title', 'slug'));
    }

    public function store(Request $request, ujians $ujians)
    {
        $validate = Validator::make($request->all(), [
            'soal' => 'required',
            'subyek' => 'required | not_in:#',
            'urutan_soal' => 'max:999',
        ],
        [
            'soal.required' => 'Soal tidak boleh kosong',
            'subyek.not_in' => 'Subyek tidak boleh kosong',
            'urutan_soal.max' => 'Urutan soal tidak boleh lebih dari 999',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $count_soal_with_subyek = soals::where('id_ujian', $ujians->id_ujian)->where('id_subyek', $request->subyek)->count();
        $max_soal_subyek = subyeks::where('id_subyek', $request->subyek)->first()->jumlah_soal;
        if ($count_soal_with_subyek == $max_soal_subyek) {
            toast('Jumlah Soal Dengan Subyek Terpilih Sudah Mencapai Batas Maksimal', 'error');
            return redirect()->back()->withInput();
        }
        $soal = new soals();
        $soal->soal = $request->soal;
        $soal->id_subyek = $request->subyek;
        $soal->id_ujian = $ujians->id_ujian;
        $soal->urutan_soal = $request->urutan_soal ?? 0;
        $soal->save();

        $jawaban = $request->input('jawaban', []);
        foreach ($jawaban as $key => $value) {
            $jawaban = new jawabans();
            $jawaban->id_soal = $soal->id_soal;
            $jawaban->jawaban = $value ?? '';
            $jawaban->status_jawaban = $request->status_jawaban[$key] ?? 0;
            $jawaban->save();
        }

        toast('Soal Berhasil Ditambahkan', 'success');
        return redirect()->route('olimpiade.soal.index', $ujians->id_ujian);
    }

    public function show(soals $soals)
    {
        //
    }

    public function edit(soals $soals)
    {
        $title = 'Edit Soal';
        $slug = 'edit';

        $subyeks = subyeks::where('id_ujian', $soals->id_ujian)->get();
        $jawabans = jawabans::where('id_soal', $soals->id_soal)->get();
        return view('admin/olimpiade/ujian/soal/edit-soal', compact('jawabans','soals','subyeks','title', 'slug'));
    }

    public function update(Request $request, soals $soals)
    {
        $validate = Validator::make($request->all(), [
            'soal' => 'required',
            'subyek' => 'required | not_in:#',
            'urutan_soal' => 'max:999',
        ],
        [
            'soal.required' => 'Soal tidak boleh kosong',
            'subyek.not_in' => 'Subyek tidak boleh kosong',
            'urutan_soal.max' => 'Urutan soal tidak boleh lebih dari 999',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $count_soal_with_subyek = soals::where('id_ujian', $request->id_ujian)->where('id_subyek', $request->subyek)->count();
        $max_soal_subyek = subyeks::where('id_subyek', $request->subyek)->first()->jumlah_soal;
        if ($count_soal_with_subyek == $max_soal_subyek) {
            toast('Jumlah Soal Dengan Subyek Terpilih Sudah Mencapai Batas Maksimal', 'error');
            return redirect()->back()->withInput();
        }
        $soals->soal = $request->soal;
        $soals->id_subyek = $request->subyek;
        $soals->urutan_soal = $request->urutan_soal ?? 0;
        $soals->save();

        $jawaban = $request->input('jawaban', []);
        foreach ($jawaban as $key => $value) {
            $jawaban = jawabans::where('id_jawaban', $key)->first();
            $jawaban->jawaban = $value ?? '';
            $jawaban->status_jawaban = $request->status_jawaban[$key] ?? 0;
            $jawaban->save();
        }
        toast('Soal Berhasil Diubah', 'success');
        return redirect()->route('olimpiade.soal.index', $soals->id_ujian);
    }

    public function destroy(soals $soals)
    {
        $soals->delete();
        toast('Soal Berhasil Dihapus', 'success');
        return redirect()->back();
    }
}
