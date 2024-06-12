<?php

namespace App\Http\Controllers;

use App\Models\gelombang_pembayarans;
use App\Models\pengumumans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengumumansController extends Controller
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
        $title = 'Pengumuman';
        $slug = 'pengumuman';

        $delete = 'Delete Pengumuman';
        $delete_message = 'Anda yakin ingin menghapus pengumuman ini ?';
        confirmDelete($delete, $delete_message);

        $pengumumans = pengumumans::where('event',$this->event)->get();
        return view('admin.olimpiade.pengumuman.pengumuman', compact('pengumumans', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Pengumuman';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            $gelombangs = gelombang_pembayarans::where('event', 'olimpiade')->get();
        } elseif ($this->event == 'poster'){
            $gelombangs = gelombang_pembayarans::where('event', 'poster')->get();
        }
        return view('admin.olimpiade.pengumuman.add-pengumuman', compact('title', 'slug', 'gelombangs'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'judul' => 'required | max:100',
            'deskripsi' => 'required',
            'tipe_pengumuman' => 'required',
            'gelombang' => $request->tipe_pengumuman == 'gelombang' ? 'required' : '',
        ], [
            'judul.required' => 'Judul pengumuman harus diisi',
            'judul.max' => 'Judul pengumuman maksimal 100 karakter',
            'deskripsi.required' => 'Deskripsi pengumuman harus diisi',
            'tipe_pengumuman.required' => 'Tipe pengumuman harus diisi',
            'gelombang.required' => 'Gelombang harus diisi',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $pengumuman = new pengumumans();
        $pengumuman->judul = $request->judul;
        $pengumuman->deskripsi = $request->deskripsi;
        $pengumuman->tipe_pengumuman = $request->tipe_pengumuman;
        if ($request->tipe_pengumuman == 'gelombang'){
            $pengumuman->id_gelombang = $request->gelombang;
        }
        $pengumuman->event = $this->event;
        $pengumuman->status_pengumuman = $request->status_pengumuman ? 1 : 0;
        $pengumuman->save();

        toast('Pengumuman berhasil ditambahkan','success');
        return redirect()->route($this->event.'.pengumuman.index');

    }

    public function show(pengumumans $pengumumans)
    {
        //
    }

    public function edit(pengumumans $pengumumans)
    {
        $title = 'Edit Pengumuman';
        $slug = 'edit';

        if ($this->event == 'olimpiade') {
            $gelombangs = gelombang_pembayarans::where('event', 'olimpiade')->get();
        } elseif ($this->event == 'poster'){
            $gelombangs = gelombang_pembayarans::where('event', 'poster')->get();
        }
        return view('admin.olimpiade.pengumuman.edit-pengumuman', compact('pengumumans', 'title', 'slug', 'gelombangs'));
    }

    public function update(Request $request, pengumumans $pengumumans)
    {
        $validate = Validator::make($request->all(),[
            'judul' => 'required | max:100',
            'deskripsi' => 'required',
            'tipe_pengumuman' => 'required',
            'gelombang' => $request->tipe_pengumuman == 'gelombang' ? 'required' : '',
        ], [
            'judul.required' => 'Judul pengumuman harus diisi',
            'judul.max' => 'Judul pengumuman maksimal 100 karakter',
            'deskripsi.required' => 'Deskripsi pengumuman harus diisi',
            'tipe_pengumuman.required' => 'Tipe pengumuman harus diisi',
            'gelombang.required' => 'Gelombang harus diisi',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $pengumumans = pengumumans::find($pengumumans->id_pengumuman);
        $pengumumans->judul = $request->judul;
        $pengumumans->deskripsi = $request->deskripsi;
        $pengumumans->tipe_pengumuman = $request->tipe_pengumuman;
        if ($request->tipe_pengumuman == 'gelombang'){
            $pengumumans->id_gelombang = $request->gelombang;
        }else{
            $pengumumans->id_gelombang = null;
        }
        $pengumumans->status_pengumuman = $request->status_pengumuman ? 1 : 0;
        $pengumumans->save();

        toast('Pengumuman berhasil diubah','success');
        return redirect()->route($this->event.'.pengumuman.index');
    }

    public function destroy(pengumumans $pengumumans)
    {
        $pengumumans->delete();
        toast('Pengumuman berhasil dihapus','success');
        return redirect()->route($this->event.'.pengumuman.index');
    }
}
