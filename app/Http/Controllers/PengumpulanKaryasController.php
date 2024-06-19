<?php

namespace App\Http\Controllers;

use App\Models\pengumpulan_karyas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumpulanKaryasController extends Controller
{
    public function index()
    {
        $title = 'Pengumpulan Karya';
        $slug = 'pengumpulan-karya';

        $delete = 'Delete Pengumpulan Karya';
        $delete_message = 'Anda yakin ingin menghapus pengumpulan karya ini ?';
        confirmDelete($delete, $delete_message);

        $pengumpulan_karyas = pengumpulan_karyas::all();
        return view('admin/public-poster/pengumpulan/pengumpulan-karya', compact('pengumpulan_karyas', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Pengumpulan Karya';
        $slug = 'add';

        return view('admin/public-poster/pengumpulan/add-pengumpulan-karya', compact('title', 'slug'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'judul' => 'required|max:30',
            'group_wa' => 'max:100',
            'mulai' => 'required | date',
            'berakhir' => 'required | date | after_or_equal:mulai',
            'waktu_mulai' => 'required',
            'waktu_berakhir' => 'required | ' . ($request->berakhir == $request->mulai ? 'after:waktu_mulai' : ''),
        ],[
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Judul maksimal 30 karakter',
            'group_wa.max' => 'Group WA maksimal 100 karakter',
            'mulai.required' => 'Tanggal Mulai harus diisi',
            'berakhir.required' => 'Tanggal Berakhir harus diisi',
            'berakhir.after_or_equal' => 'Tanggal Berakhir harus setelah atau sama dengan Tanggal Mulai',
            'waktu_mulai.required' => 'Waktu Mulai harus diisi',
            'waktu_berakhir.required' => 'Waktu Berakhir harus diisi',
            'waktu_berakhir.after' => 'Waktu Berakhir harus setelah Waktu Mulai',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $datetime_mulai = $request->mulai . 'T' . $request->waktu_mulai;
        $datetime_berakhir = $request->berakhir . 'T' . $request->waktu_berakhir;
        $pengumpulan_karyas = new pengumpulan_karyas();
        $pengumpulan_karyas->judul = $request->judul;
        $pengumpulan_karyas->deskripsi = $request->deskripsi;
        $pengumpulan_karyas->peraturan = $request->peraturan;
        $pengumpulan_karyas->group_wa = $request->group_wa;
        $pengumpulan_karyas->mulai = $datetime_mulai;
        $pengumpulan_karyas->berakhir = $datetime_berakhir;
        $pengumpulan_karyas->status_pengumpulan = $request->status_pengumpulan ?? 0;
        $pengumpulan_karyas->save();

        toast('Pengumpulan Karya Berhasil Ditambahkan','success');
        return redirect()->route('poster.pengumpulan_karya.index');
    }

    public function show(pengumpulan_karyas $pengumpulan_karyas)
    {
        //
    }

    public function edit(pengumpulan_karyas $pengumpulan_karyas)
    {
        $title = 'Edit Pengumpulan Karya';
        $slug = 'edit';

        $pengumpulan_karyas->waktu_mulai = date('H:i', strtotime($pengumpulan_karyas->mulai));
        $pengumpulan_karyas->waktu_berakhir = date('H:i', strtotime($pengumpulan_karyas->berakhir));
        $pengumpulan_karyas->mulai = date('Y-m-d', strtotime($pengumpulan_karyas->mulai));
        $pengumpulan_karyas->berakhir = date('Y-m-d', strtotime($pengumpulan_karyas->berakhir));
        return view('admin/public-poster/pengumpulan/edit-pengumpulan-karya', compact('pengumpulan_karyas', 'title', 'slug'));
    }

    public function update(Request $request, pengumpulan_karyas $pengumpulan_karyas)
    {
        $validate = Validator::make($request->all(), [
            'judul' => 'required|max:30',
            'group_wa' => 'max:100',
            'mulai' => 'required | date',
            'berakhir' => 'required | date | after_or_equal:mulai',
            'waktu_mulai' => 'required',
            'waktu_berakhir' => 'required | ' . ($request->berakhir == $request->mulai ? 'after:waktu_mulai' : ''),
        ],[
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Judul maksimal 30 karakter',
            'group_wa.max' => 'Group WA maksimal 100 karakter',
            'mulai.required' => 'Tanggal Mulai harus diisi',
            'berakhir.required' => 'Tanggal Berakhir harus diisi',
            'berakhir.after_or_equal' => 'Tanggal Berakhir harus setelah atau sama dengan Tanggal Mulai',
            'waktu_mulai.required' => 'Waktu Mulai harus diisi',
            'waktu_berakhir.required' => 'Waktu Berakhir harus diisi',
            'waktu_berakhir.after' => 'Waktu Berakhir harus setelah Waktu Mulai',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $datetime_mulai = $request->mulai . 'T' . $request->waktu_mulai;
        $datetime_berakhir = $request->berakhir . 'T' . $request->waktu_berakhir;
        $pengumpulan_karyas->judul = $request->judul;
        $pengumpulan_karyas->deskripsi = $request->deskripsi;
        $pengumpulan_karyas->peraturan = $request->peraturan;
        $pengumpulan_karyas->group_wa = $request->group_wa;
        $pengumpulan_karyas->mulai = $datetime_mulai;
        $pengumpulan_karyas->berakhir = $datetime_berakhir;
        $pengumpulan_karyas->status_pengumpulan = $request->status_pengumpulan ?? 0;
        $pengumpulan_karyas->save();

        toast('Pengumpulan Karya Berhasil Diubah','success');
        return redirect()->route('poster.pengumpulan_karya.index');
    }

    public function destroy(pengumpulan_karyas $pengumpulan_karyas)
    {
        $pengumpulan_karyas->delete();
        toast('Pengumpulan Karya Berhasil Dihapus','success');
        return redirect()->route('poster.pengumpulan_karya.index');
    }
}
