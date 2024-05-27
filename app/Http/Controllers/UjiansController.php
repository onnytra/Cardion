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
        return view('admin/olimpiade/ujian/ujian', compact('ujians', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Ujian';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/ujian/add-ujian', compact('title', 'slug'));
        } elseif ($this->event == 'poster'){
            return view('admin/poster/ujian/add-ujian', compact('title', 'slug'));
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:20',
        ], [
            'nama.required' => 'Nama ujian harus diisi',
            'nama.max' => 'Nama ujian maksimal 20 karakter',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
    }

    public function show(ujians $ujians)
    {
        //
    }

    public function edit(ujians $ujians)
    {
        //
    }

    public function update(Request $request, ujians $ujians)
    {
        //
    }

    public function destroy(ujians $ujians)
    {
        //
    }
}
