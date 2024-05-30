<?php

namespace App\Http\Controllers;

use App\Models\cabangs;
use App\Models\rayons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RayonsController extends Controller
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

    public function getRayons(Request $request)
    {
        $rayons = rayons::where('id_cabang', $request->id_cabang)->get();
        return response()->json($rayons);
    }
    public function index(cabangs $cabangs)
    {
        $title = 'Rayon';
        $slug = 'rayon';

        $delete = 'Delete Rayon';
        $delete_message = 'Anda yakin ingin menghapus rayon ini ?';
        confirmDelete($delete, $delete_message);

        $rayons = rayons::where('id_cabang', $cabangs->id_cabang)->get();
        return view('admin/olimpiade/cabang/rayon', compact('cabangs','rayons', 'title', 'slug'));
    }

    public function create(cabangs $cabangs)
    {
        $title = 'Tambah Rayon';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/cabang/add-rayon', compact('cabangs','title', 'slug'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/cabang/add-rayon', compact('cabangs','title', 'slug'));
        }
    }

    public function store(Request $request, cabangs $cabangs)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:30',
            'kuota' => 'required | max:11',
            'contact' => 'max:15',
        ], [
            'nama.required' => 'Nama rayon harus diisi',
            'nama.max' => 'Nama rayon maksimal 30 karakter',
            'kuota.required' => 'Kuota rayon harus diisi',
            'kuota.max' => 'Kuota rayon maksimal 11 karakter',
            'contact.max' => 'Contact Person rayon maksimal 15 karakter',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $rayon = new rayons();
        $rayon->rayon = $request->nama;
        $rayon->kuota = $request->kuota;
        $rayon->contact_person = $request->contact;
        $rayon->status_rayon = $request->toggle ? 1 : 0;
        $rayon->id_cabang = $cabangs->id_cabang;
        $rayon->save();

        toast('Rayon Berhasil Ditambahkan','success');
        return redirect()->route($this->event.'.rayon.index', $cabangs->id_cabang);
    }

    public function show(rayons $rayons)
    {
        //
    }

    public function edit(rayons $rayons)
    {
        $title = 'Edit Rayon';
        $slug = 'edit';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/cabang/edit-rayon', compact('rayons', 'title', 'slug'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/cabang/edit-rayon', compact('rayons', 'title', 'slug'));
        }
    }

    public function update(Request $request, rayons $rayons)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:30',
            'kuota' => 'required | max:11',
            'contact' => 'max:15',
        ], [
            'nama.required' => 'Nama rayon harus diisi',
            'nama.max' => 'Nama rayon maksimal 30 karakter',
            'kuota.required' => 'Kuota rayon harus diisi',
            'kuota.max' => 'Kuota rayon maksimal 11 karakter',
            'contact.max' => 'Contact Person rayon maksimal 15 karakter',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $rayons->rayon = $request->nama;
        $rayons->kuota = $request->kuota;
        $rayons->contact_person = $request->contact;
        $rayons->status_rayon = $request->toggle ? 1 : 0;
        $rayons->save();

        toast('Rayon Berhasil Diperbarui','success');
        return redirect()->route($this->event.'.rayon.index', $rayons->id_cabang);
    }

    public function destroy(rayons $rayons)
    {
        $rayons->delete();
        toast('Rayon Berhasil Dihapus','success');
        return redirect()->route($this->event.'.rayon.index', $rayons->id_cabang);
    }
}
