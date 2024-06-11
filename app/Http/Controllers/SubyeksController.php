<?php

namespace App\Http\Controllers;

use App\Models\subyeks;
use App\Models\ujians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubyeksController extends Controller
{
    public function index(ujians $ujians)
    {
        $title = 'Subyek';
        $slug = 'subyek';

        $delete = 'Delete Subyek';
        $delete_message = 'Anda yakin ingin menghapus subyek ini ?';
        confirmDelete($delete, $delete_message);

        $subyeks = subyeks::where('id_ujian', $ujians->id_ujian)->get();
        return view('admin/olimpiade/ujian/subyek/subyek-ujian', compact('ujians','subyeks', 'title', 'slug'));
    }

    public function create(ujians $ujians)
    {
        $title = 'Tambah Subyek';
        $slug = 'add';

        return view('admin/olimpiade/ujian/subyek/add-subyek', compact('ujians','title', 'slug'));
    }

    public function store(Request $request, ujians $ujians)
    {
        $validate = Validator::make($request->all(), [
            'label' => 'required | max:30',
            'total_soal' => 'required | numeric | min:1 | max:999',
        ], [
            'label.required' => 'Label harus diisi',
            'label.max' => 'Label maksimal 30 karakter',
            'total_soal.required' => 'Total soal harus diisi',
            'total_soal.numeric' => 'Total soal harus berupa angka',
            'total_soal.min' => 'Total soal minimal 1',
            'total_soal.max' => 'Total soal maksimal 999',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $total_soal_ujian = $ujians->total_soal;
        $total_soal_subyek = subyeks::where('id_ujian', $ujians->id_ujian)->sum('jumlah_soal');
        if ($total_soal_subyek + $request->total_soal > $total_soal_ujian) {
            toast('Total Soal Subyek Melebihi Total Soal Ujian', 'error');
            return redirect()->back()->withInput();
        }

        $subyek = new subyeks();
        $subyek->nama = $request->label;
        $subyek->jumlah_soal = $request->total_soal;
        $subyek->id_ujian = $ujians->id_ujian;
        $subyek->save();

        toast('Subyek Berhasil Ditambahkan', 'success');
        return redirect()->route('olimpiade.subyek.index',$ujians->id_ujian);
    }

    public function show(subyeks $subyeks)
    {
        //
    }

    public function edit(subyeks $subyeks)
    {
        $title = 'Edit Subyek';
        $slug = 'edit';

        return view('admin/olimpiade/ujian/subyek/edit-subyek', compact('subyeks', 'title', 'slug'));
    }

    public function update(Request $request, subyeks $subyeks)
    {
        $validate = Validator::make($request->all(), [
            'label' => 'required | max:30',
            'total_soal' => 'required | numeric | min:1 | max:999',
        ], [
            'label.required' => 'Label harus diisi',
            'label.max' => 'Label maksimal 30 karakter',
            'total_soal.required' => 'Total soal harus diisi',
            'total_soal.numeric' => 'Total soal harus berupa angka',
            'total_soal.min' => 'Total soal minimal 1',
            'total_soal.max' => 'Total soal maksimal 999',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $id_ujian = $subyeks->id_ujian;
        $ujians = ujians::find($id_ujian);
        $total_soal_ujian = $ujians->total_soal;
        $total_soal_subyek = subyeks::where('id_ujian', $id_ujian)->sum('jumlah_soal');
        if ($total_soal_subyek + $request->total_soal - $subyeks->jumlah_soal > $total_soal_ujian) {
            toast('Total Soal Subyek Melebihi Total Soal Ujian', 'error');
            return redirect()->back();
        }

        $subyeks->nama = $request->label;
        $subyeks->jumlah_soal = $request->total_soal;
        $subyeks->save();

        toast('Subyek Berhasil Diubah', 'success');
        return redirect()->route('olimpiade.subyek.index',$subyeks->id_ujian);
    }

    public function destroy(subyeks $subyeks)
    {
        $subyeks->delete();
        toast('Subyek Berhasil Dihapus', 'success');
        return redirect()->back();
    }
}
