<?php

namespace App\Http\Controllers;

use App\Models\pesertas;
use App\Models\cabangs;
use App\Models\rayons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesertasController extends Controller
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
        $title = 'Peserta';
        $slug = 'peserta';

        $delete = 'Delete Peserta';
        $delete_message = 'Anda yakin ingin menghapus peserta ini ?';
        confirmDelete($delete, $delete_message);

        $pesertas_sudah = pesertas::where('event', $this->event)->where('status_pembayaran', 'sudah')->get();
        $pesertas_belum = pesertas::where('event', $this->event)->where('status_pembayaran', 'belum')->get();

        return view('admin/olimpiade/peserta/peserta', compact('pesertas_sudah', 'pesertas_belum', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah Peserta';
        $slug = 'add';

        $cabangs = cabangs::where('event', $this->event)->get();

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/peserta/add-peserta', compact('cabangs','title', 'slug'));
        } elseif ($this->event == 'poster') {
            return view('admin/poster/peserta/add-peserta', compact('cabangs','title', 'slug'));
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
            'email' => 'required | email | max:150 | unique:pesertas,email',
            'telepon' => 'required | max:15',
            'sekolah' => 'required | max:100',
            'alamat_sekolah' => 'required | max:100',
            'id_cabang' => 'required | exists:cabangs,id_cabang',
            'id_rayon' => 'required | exists:rayons,id_rayon',
            'nama_team' => 'required | max:50',
            'password' => 'required | min:8',
            'verify_password' => 'required | same:password',
            'sertifikat' => $request->sertifikat ? 'required | max:100' : '',
        ],
        [
            'nama.required' => 'Nama peserta harus diisi',
            'nama.max' => 'Nama peserta maksimal 100 karakter',
            'email.required' => 'Email peserta harus diisi',
            'email.email' => 'Email peserta tidak valid',
            'email.max' => 'Email peserta maksimal 150 karakter',
            'email.unique' => 'Email peserta sudah terdaftar',
            'telepon.required' => 'Telepon peserta harus diisi',
            'telepon.max' => 'Telepon peserta maksimal 15 karakter',
            'sekolah.required' => 'Sekolah peserta harus diisi',
            'sekolah.max' => 'Sekolah peserta maksimal 100 karakter',
            'alamat_sekolah.required' => 'Alamat sekolah peserta harus diisi',
            'alamat_sekolah.max' => 'Alamat sekolah peserta maksimal 100 karakter',
            'id_cabang.required' => 'Cabang peserta harus diisi',
            'id_cabang.exists' => 'Cabang peserta tidak valid',
            'id_rayon.required' => 'Rayon peserta harus diisi',
            'id_rayon.exists' => 'Rayon peserta tidak valid',
            'nama_team.required' => 'Nama team peserta harus diisi',
            'nama_team.max' => 'Nama team peserta maksimal 50 karakter',
            'password.required' => 'Password peserta harus diisi',
            'password.min' => 'Password peserta minimal 8 karakter',
            'verify_password.required' => 'Konfirmasi password peserta harus diisi',
            'verify_password.same' => 'Konfirmasi password peserta tidak sama dengan password peserta',
            'sertifikat.required' => 'Sertifikat peserta harus diisi',
            'sertifikat.max' => 'Sertifikat peserta maksimal 100 karakter',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        $peserta = new pesertas();
        $peserta->id_peserta = date('His').rand(1,999);
        $peserta->nomor = $this->event == 'olimpiade' ? '01-'.$peserta->id_peserta.'-'.rand(1,999) : '02-'.$peserta->id_peserta.'-'.rand(1,999);
        $peserta->nama_team = $request->nama_team;
        $peserta->nama = $request->nama;
        $peserta->email = $request->email;
        $peserta->telepon = $request->telepon;
        $peserta->sekolah = $request->sekolah;
        $peserta->alamat_sekolah = $request->alamat_sekolah;
        $peserta->sertifikat = $request->sertifikat;
        $peserta->anggota_pertama = $request->anggota_pertama;
        $peserta->telepon_anggota_pertama = $request->telepon_anggota_pertama;
        $peserta->anggota_kedua = $request->anggota_kedua;
        $peserta->telepon_anggota_kedua = $request->telepon_anggota_kedua;
        $peserta->event = $this->event;
        $peserta->password = bcrypt($request->password);
        $peserta->status_pembayaran = 'sudah';
        $peserta->keterangan = 'Aktif';
        $peserta->id_cabang = $request->id_cabang;
        $peserta->id_rayon = $request->id_rayon;
        $peserta->password = bcrypt($request->password);
        $peserta->save();

        toast('Peserta Berhasil Ditambahkan','success');
        return redirect()->route($this->event.'.peserta.index');
    }

    public function show(pesertas $pesertas)
    {
        //
    }

    public function edit(pesertas $pesertas)
    {
        $title = 'Edit Peserta';
        $slug = 'edit';

        $cabangs = cabangs::where('event', $this->event)->get();
        $rayons = rayons::where('id_cabang', $pesertas->id_cabang)->get();

        if ($this->event == 'olimpiade') {
            return view('admin/olimpiade/peserta/edit-peserta', compact('pesertas', 'cabangs','rayons','title', 'slug'));
        } elseif ($this->event == 'poster') {
            return view('admin/poster/peserta/edit-peserta', compact('pesertas', 'cabangs','rayons','title', 'slug'));
        }
    }

    public function update(Request $request, pesertas $pesertas)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
            'email' => 'required | email | max:150 | unique:pesertas,email,'.$pesertas->id_peserta.',id_peserta',
            'telepon' => 'required | max:15',
            'sekolah' => 'required | max:100',
            'alamat_sekolah' => 'required | max:100',
            'id_cabang' => 'required | exists:cabangs,id_cabang',
            'id_rayon' => 'required | exists:rayons,id_rayon',
            'nama_team' => 'required | max:50',
            //check if password is empty
            'password' => $request->password ? 'required | min:8' : '',
            'verify_password' => $request->password ? 'required | same:password' : '',
            'sertifikat' => $request->sertifikat ? 'required | max:100' : '',
        ],
        [
            'nama.required' => 'Nama peserta harus diisi',
            'nama.max' => 'Nama peserta maksimal 100 karakter',
            'email.required' => 'Email peserta harus diisi',
            'email.email' => 'Email peserta tidak valid',
            'email.max' => 'Email peserta maksimal 150 karakter',
            'email.unique' => 'Email peserta sudah terdaftar',
            'telepon.required' => 'Telepon peserta harus diisi',
            'telepon.max' => 'Telepon peserta maksimal 15 karakter',
            'sekolah.required' => 'Sekolah peserta harus diisi',
            'sekolah.max' => 'Sekolah peserta maksimal 100 karakter',
            'alamat_sekolah.required' => 'Alamat sekolah peserta harus diisi',
            'alamat_sekolah.max' => 'Alamat sekolah peserta maksimal 100 karakter',
            'id_cabang.required' => 'Cabang peserta harus diisi',
            'id_cabang.exists' => 'Cabang peserta tidak valid',
            'id_rayon.required' => 'Rayon peserta harus diisi',
            'id_rayon.exists' => 'Rayon peserta tidak valid',
            'nama_team.required' => 'Nama team peserta harus diisi',
            'nama_team.max' => 'Nama team peserta maksimal 50 karakter',
            'password.required' => 'Password peserta harus diisi',
            'password.min' => 'Password peserta minimal 8 karakter',
            'verify_password.required' => 'Konfirmasi password peserta harus diisi',
            'verify_password.same' => 'Konfirmasi password peserta tidak sama dengan password peserta',
            'sertifikat.required' => 'Sertifikat peserta harus diisi',
            'sertifikat.max' => 'Sertifikat peserta maksimal 100 karakter',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        $pesertas->nama_team = $request->nama_team;
        $pesertas->nama = $request->nama;
        $pesertas->email = $request->email;
        $pesertas->telepon = $request->telepon;
        $pesertas->sekolah = $request->sekolah;
        $pesertas->alamat_sekolah = $request->alamat_sekolah;
        $pesertas->sertifikat = $request->sertifikat;
        $pesertas->anggota_pertama = $request->anggota_pertama;
        $pesertas->telepon_anggota_pertama = $request->telepon_anggota_pertama;
        $pesertas->anggota_kedua = $request->anggota_kedua;
        $pesertas->telepon_anggota_kedua = $request->telepon_anggota_kedua;
        $pesertas->id_cabang = $request->id_cabang;
        $pesertas->id_rayon = $request->id_rayon;
        $pesertas->password = $request->password ? bcrypt($request->password) : $pesertas->password;
        $pesertas->save();

        toast('Peserta Berhasil Diubah','success');
        return redirect()->route($this->event.'.peserta.index');
    }

    public function destroy(pesertas $pesertas)
    {
        $pesertas->delete();

        toast('Peserta Berhasil Dihapus','success');
        return redirect()->route($this->event.'.peserta.index');
    }
}
