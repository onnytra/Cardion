<?php

namespace App\Http\Controllers;

use App\Models\gelombang_pembayarans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GelombangPembayaransController extends Controller
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
        $title = 'Gelombang Pembayaran';
        $slug = 'gelombang-pembayaran';

        $delete = 'Delete Gelombang Pembayaran';
        $delete_message = 'Anda yakin ingin menghapus gelombang pembayaran ini ?';
        confirmDelete($delete, $delete_message);

        $gelombang_pembayarans = gelombang_pembayarans::where('event',$this->event)->get();
        return view('admin/olimpiade/gelombang-pembayaran/gelombang-pembayaran', compact('gelombang_pembayarans', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Gelombang Pembayaran';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/gelombang-pembayaran/add-gelombang', compact('title', 'slug'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/gelombang-pembayaran/add-gelombang', compact('title', 'slug'));
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'nama' => 'required | max:50',
            'harga' => 'required',
            'tgl_mulai' => 'required | date',
            'tgl_selesai' => 'required | date | after_or_equal:tgl_mulai', 
        ], [
            'nama.required' => 'Nama gelombang pembayaran harus diisi',
            'nama.max' => 'Nama gelombang pembayaran maksimal 50 karakter',
            'harga.required' => 'Harga gelombang pembayaran harus diisi',
            'tgl_mulai.required' => 'Tanggal mulai gelombang pembayaran harus diisi',
            'tgl_mulai.date' => 'Tanggal mulai gelombang pembayaran harus berupa tanggal',
            'tgl_selesai.required' => 'Tanggal selesai gelombang pembayaran harus diisi',
            'tgl_selesai.date' => 'Tanggal selesai gelombang pembayaran harus berupa tanggal',
            'tgl_selesai.after_or_equal' => 'Tanggal selesai gelombang pembayaran harus sama atau setelah tanggal mulai',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $gelombang_pembayaran = new gelombang_pembayarans();
        $gelombang_pembayaran->gelombang = $request->nama;
        $gelombang_pembayaran->harga = $request->harga;
        $gelombang_pembayaran->mulai = $request->tgl_mulai;
        $gelombang_pembayaran->selesai = $request->tgl_selesai;
        $gelombang_pembayaran->event = $this->event;
        $gelombang_pembayaran->status_gelombang_pembayaran = $request->status_gelombang ? 1 : 0;
        $gelombang_pembayaran->save();

        toast('Gelombang Pembayaran berhasil ditambahkan','success');
        return redirect()->route($this->event.'.gelombang_pembayaran.index');
    }

    public function show(gelombang_pembayarans $gelombang_pembayarans)
    {
        //
    }

    public function edit(gelombang_pembayarans $gelombang_pembayarans)
    {
        $title = 'Edit Gelombang Pembayaran';
        $slug = 'edit';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/gelombang-pembayaran/edit-gelombang', compact('title', 'slug', 'gelombang_pembayarans'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/gelombang-pembayaran/edit-gelombang', compact('title', 'slug', 'gelombang_pembayarans'));
        }
    }

    public function update(Request $request, gelombang_pembayarans $gelombang_pembayarans)
    {
        $validate = Validator::make($request->all(),[
            'nama' => 'required | max:50',
            'harga' => 'required',
            'tgl_mulai' => 'required | date',
            'tgl_selesai' => 'required | date | after_or_equal:tgl_mulai', 
        ], [
            'nama.required' => 'Nama gelombang pembayaran harus diisi',
            'nama.max' => 'Nama gelombang pembayaran maksimal 50 karakter',
            'harga.required' => 'Harga gelombang pembayaran harus diisi',
            'tgl_mulai.required' => 'Tanggal mulai gelombang pembayaran harus diisi',
            'tgl_mulai.date' => 'Tanggal mulai gelombang pembayaran harus berupa tanggal',
            'tgl_selesai.required' => 'Tanggal selesai gelombang pembayaran harus diisi',
            'tgl_selesai.date' => 'Tanggal selesai gelombang pembayaran harus berupa tanggal',
            'tgl_selesai.after' => 'Tanggal selesai gelombang pembayaran harus sama atau setelah tanggal mulai',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        $gelombang_pembayarans->gelombang = $request->nama;
        $gelombang_pembayarans->harga = $request->harga;
        $gelombang_pembayarans->mulai = $request->tgl_mulai;
        $gelombang_pembayarans->selesai = $request->tgl_selesai;
        $gelombang_pembayarans->status_gelombang_pembayaran = $request->status_gelombang ? 1 : 0;
        $gelombang_pembayarans->save();

        toast('Gelombang Pembayaran berhasil diubah','success');
        return redirect()->route($this->event.'.gelombang_pembayaran.index');
    }

    public function destroy(gelombang_pembayarans $gelombang_pembayarans)
    {
        $gelombang_pembayarans->delete();
        toast('Gelombang Pembayaran berhasil dihapus','success');
        return redirect()->route($this->event.'.gelombang_pembayaran.index');
    }
}
