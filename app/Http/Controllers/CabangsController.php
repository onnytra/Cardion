<?php

namespace App\Http\Controllers;

use App\Models\cabangs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
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
        $event = $this->event;
        $delete = 'Delete Cabang';
        $delete_message = 'Anda yakin ingin menghapus cabang ini ?';
        confirmDelete($delete, $delete_message);

        $cabangs = cabangs::where('event',$this->event)->get();
        return view('admin/olimpiade/cabang/cabang', compact('cabangs', 'title', 'slug', 'event'));
    }

    public function create()
    {
        $title = 'Tambah Cabang';
        $slug = 'add';
        $event = $this->event;
        
        return view('admin/olimpiade/cabang/add-cabang', compact('title', 'slug', 'event'));
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
        $event = $this->event;
        return view('admin/olimpiade/cabang/edit-cabang', compact('cabangs', 'title', 'slug', 'event'));
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
        $cabangs->save();
        toast('Cabang Berhasil Diperbarui','success');
        return redirect()->route($this->event.'.cabang.index');
    }

    public function destroy(cabangs $cabangs)
    {
        try {
            $cabangs->delete();
            toast('Cabang Berhasil Dihapus','success');
            return redirect()->route($this->event.'.cabang.index');
        } catch (\Throwable $th) {
            toast('Cabang Gagal Dihapus, Check Apakah Cabang Memiliki Rayon','error');
            return redirect()->route($this->event.'.cabang.index');
        }
    }
}
