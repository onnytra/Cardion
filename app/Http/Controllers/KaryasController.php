<?php

namespace App\Http\Controllers;

use App\Models\karyas;
use App\Models\pengumpulan_karyas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KaryasController extends Controller
{
    public function show_pengumpulan(){
        $title = 'Penilaian Karya';
        $slug = 'penilaian';

        $pengumpulan_karyas = pengumpulan_karyas::all();
        return view('admin.public-poster.penilaian.pengumpulan-karya', compact('title', 'slug', 'pengumpulan_karyas'));
    }
    public function index($id)
    {
        $title = 'Penilaian';
        $slug = 'penilaian';

        $delete = 'Delete Karya';
        $delete_message = 'Anda yakin ingin menghapus karya ini ?';
        confirmDelete($delete, $delete_message);

        $karyas = karyas::where('id_pengumpulan', $id)->get();
        $karya_sudah = $karyas->whereNotNull('nilai');
        $karya_belum = $karyas->whereNull('nilai');
        return view('admin.public-poster.penilaian.penilaian', compact('title', 'slug', 'karya_sudah', 'karya_belum'));
    }

    public function update_nilai(Request $request, karyas $karyas)
    {
        $validation = Validator::make($request->all(), [
            'nilai' => 'numeric|min:0|max:100'
        ],[
            'nilai.numeric' => 'Nilai harus berupa angka',
            'nilai.min' => 'Nilai minimal 0',
            'nilai.max' => 'Nilai maksimal 100'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $karyas->nilai = $request->nilai;
        $karyas->keterangan_nilai = $request->keterangan;
        $karyas->save();

        toast('Nilai berhasil diupdate', 'success');
        return redirect()->route('poster.penilaian.index', $karyas->id_pengumpulan);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(karyas $karyas)
    {
        //
    }

    public function edit(karyas $karyas)
    {
        //
    }

    public function update(Request $request, karyas $karyas)
    {
        //
    }

    public function destroy(karyas $karyas)
    {
        $karyas->delete();
        toast('Karya berhasil dihapus', 'success');
        return redirect()->route('poster.penilaian.index', $karyas->id_pengumpulan);
    }
}
