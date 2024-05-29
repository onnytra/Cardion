<?php

namespace App\Http\Controllers;

use App\Models\sesis;
use App\Models\ujians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SesisController extends Controller
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

    public function index(ujians $ujians)
    {
        $title = 'Sesi';
        $slug = 'sesi';

        $delete = 'Delete Sesi';
        $delete_message = 'Anda yakin ingin menghapus sesi ini ?';
        confirmDelete($delete, $delete_message);

        $sesis = sesis::where('id_ujian', $ujians->id_ujian)->get();
        return view('admin/olimpiade/ujian/sesi', compact('ujians','sesis', 'title', 'slug'));
    }

    public function create(ujians $ujians)
    {
        $title = 'Tambah Sesi';
        $slug = 'add';

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/ujian/add-sesi', compact('ujians','title', 'slug'));
        } else {
            toast('Ada Kesalahan, Tanyakan Kepada Admin');
            return redirect()->back();
        }
    }

    public function store(Request $request, ujians $ujians)
    {
        $validate = Validator::make($request->all(), [
            'mulai' => 'required | date',
            'berakhir' => 'required | date',
            'waktu_mulai' => 'required',
            'waktu_berakhir' => 'required | after:waktu-mulai',
        ], [
            'mulai.required' => 'Tanggal Mulai harus diisi',
            'berakhir.required' => 'Tanggal Berakhir harus diisi',
            'waktu_mulai.required' => 'Waktu Mulai harus diisi',
            'waktu_berakhir.required' => 'Waktu Berakhir harus diisi',
            'waktu_berakhir.after' => 'Waktu Berakhir harus setelah Waktu Mulai',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $datetime_mulai = $request->mulai . 'T' . $request->waktu_mulai;
        $datetime_berakhir = $request->berakhir . 'T' . $request->waktu_berakhir;
        $sesis = new sesis();
        $sesis->id_ujian = $ujians->id_ujian;
        $sesis->mulai = $datetime_mulai;
        $sesis->berakhir = $datetime_berakhir;
        $sesis->save();

        toast('Sesi Berhasil Ditambahkan','success');
        return redirect()->route('olimpiade.sesi.index', $ujians->id_ujian);
    }

    public function show(sesis $sesis)
    {
        //
    }

    public function edit(sesis $sesis)
    {
        $title = 'Edit Sesi';
        $slug = 'edit';

        $sesis->waktu_mulai = date('H:i', strtotime($sesis->mulai));
        $sesis->waktu_berakhir = date('H:i', strtotime($sesis->berakhir));
        $sesis->mulai = date('Y-m-d', strtotime($sesis->mulai));
        $sesis->berakhir = date('Y-m-d', strtotime($sesis->berakhir));
        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/ujian/edit-sesi', compact('sesis','title', 'slug'));
        } else {
            toast('Ada Kesalahan, Tanyakan Kepada Admin');
            return redirect()->back();
        }
    }

    public function update(Request $request, sesis $sesis)
    {
        $validate = Validator::make($request->all(), [
            'mulai' => 'required | date',
            'berakhir' => 'required | date',
            'waktu_mulai' => 'required',
            'waktu_berakhir' => 'required | after:waktu-mulai',
        ], [
            'mulai.required' => 'Tanggal Mulai harus diisi',
            'berakhir.required' => 'Tanggal Berakhir harus diisi',
            'waktu_mulai.required' => 'Waktu Mulai harus diisi',
            'waktu_berakhir.required' => 'Waktu Berakhir harus diisi',
            'waktu_berakhir.after' => 'Waktu Berakhir harus setelah Waktu Mulai',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $datetime_mulai = $request->mulai . 'T' . $request->waktu_mulai;
        $datetime_berakhir = $request->berakhir . 'T' . $request->waktu_berakhir;

        $sesis->mulai = $datetime_mulai;
        $sesis->berakhir = $datetime_berakhir;
        $sesis->save();

        toast('Sesi Berhasil Diperbarui','success');
        return redirect()->route('olimpiade.sesi.index', $sesis->id_ujian);
    }

    public function destroy(sesis $sesis)
    {
        $sesis->delete();
        toast('Sesi Berhasil Dihapus','success');
        return redirect()->back();
    }
}
