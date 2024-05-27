<?php

namespace App\Http\Controllers;

use App\Models\cabangs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class CabangsController extends Controller
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
        $title = 'Cabang';
        $slug = 'cabang';

        $delete = 'Delete Cabang';
        $delete_message = 'Anda yakin ingin menghapus cabang ini ?';
        confirmDelete($delete, $delete_message);

        $cabangs = cabangs::where('event',$this->event)->get();
        return view('admin/olimpiade/cabang/cabang', compact('cabangs', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Cabang';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/cabang/add-cabang', compact('title', 'slug'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/cabang/add-cabang', compact('title', 'slug'));
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:20',
        ], [
            'nama.required' => 'Nama cabang harus diisi',
            'nama.max' => 'Nama cabang maksimal 20 karakter',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $cabang = new cabangs();
        $cabang->cabang = $request->nama;
        $cabang->status_cabang = $request->status_cabang ? 1 : 0;
        $cabang->event = $this->event;
        $cabang->save();

        toast('Cabang Berhasil Ditambahkan','success');
        return redirect()->route($this->event.'.cabang.index');
    }

    public function edit(cabangs $cabangs)
    {
        $title = 'Edit Cabang';
        $slug = 'edit';
        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/cabang/edit-cabang', compact('cabangs', 'title', 'slug'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/cabang/edit-cabang', compact('cabangs', 'title', 'slug'));
        }
    }

    public function update(Request $request, cabangs $cabangs)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:20',
        ], [
            'nama.required' => 'Nama cabang harus diisi',
            'nama.max' => 'Nama cabang maksimal 20 karakter',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $cabangs->cabang = $request->nama;
        $cabangs->status_cabang = $request->status_cabang ? 1 : 0;
        $cabangs->event = $this->event;
        $cabang = $cabangs->save();
        toast('Cabang Berhasil Diperbarui','success');
        return redirect()->route($this->event.'.cabang.index');
    }

    public function destroy(cabangs $cabangs)
    {
        $cabangs->delete();
        toast('Cabang Berhasil Dihapus','success');
        return redirect()->route($this->event.'.cabang.index');
    }
}
