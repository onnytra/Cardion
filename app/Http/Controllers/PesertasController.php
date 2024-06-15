<?php

namespace App\Http\Controllers;

use App\Models\pesertas;
use App\Models\cabangs;
use App\Models\gelombang_pembayarans;
use App\Models\pembayarans;
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
        $event = $this->event;
        $delete = 'Delete Peserta';
        $delete_message = 'Anda yakin ingin menghapus peserta ini ?';
        confirmDelete($delete, $delete_message);

        $pesertas_sudah = pesertas::where('event', $this->event)->where('status_pembayaran', 'sudah')->get();
        $pesertas_belum = pesertas::where('event', $this->event)->where('status_pembayaran', 'belum')->get();
        $cabangs = cabangs::where('event', $this->event)->get();
        return view('admin/olimpiade/peserta/peserta', compact('pesertas_sudah', 'pesertas_belum', 'title', 'slug', 'event', 'cabangs'));
    }

    public function create()
    {
        $title = 'Tambah Peserta';
        $slug = 'add';
        $event = $this->event;
        $cabangs = cabangs::where('event', $this->event)->get();

        return view('admin/olimpiade/peserta/add-peserta', compact('cabangs','title', 'slug', 'event'));
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
        $peserta->status_data = 'belum';
        $peserta->keterangan = 'Data Perlu Dilengkapi Pada Dashboard User';
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
        $event = $this->event;
        $cabangs = cabangs::where('event', $this->event)->get();
        $rayons = rayons::where('id_cabang', $pesertas->id_cabang)->get();

        return view('admin/olimpiade/peserta/edit-peserta', compact('pesertas', 'cabangs','rayons','title', 'slug', 'event'));
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

    public function tambah_peserta_excel()
    {
        $title = 'Tambah Peserta';
        $slug = 'add excel';
        $event = $this->event;
        $delete = 'Delete Peserta';
        $delete_message = 'Anda yakin ingin menghapus peserta ini ?';
        confirmDelete($delete, $delete_message);

        $cabangs = cabangs::where('event', $this->event)->get();
        return view('admin/olimpiade/peserta/add-excel', compact('title', 'slug', 'event', 'cabangs'));
    }

    public function check_peserta_excel(Request $request)
    {
        $data = $request->data;

        $title = 'Tambah Peserta';
        $slug = 'add excel';
        $event = $this->event;
        $delete = 'Delete Peserta';
        $delete_message = 'Anda yakin ingin menghapus peserta ini ?';
        confirmDelete($delete, $delete_message);

        $cabangs = cabangs::where('event', $this->event)->get();
        $rayons = rayons::whereIn('id_cabang', $cabangs->pluck('id_cabang'))->get();
        $gelombang = gelombang_pembayarans::where('event', $this->event)->where('status_gelombang_pembayaran', 1)->get();
        return view('admin.olimpiade.peserta.tambah-peserta-excel', compact('title', 'slug', 'event', 'cabangs', 'data', 'rayons', 'gelombang'));
    }
    
    public function store_peserta_excel(Request $request)
    {
        $data = $request->all();

        // Initialize validation rules and messages
        $rules = [];
        $messages = [];

        foreach ($data['nama_team'] as $index => $value) {
            $rules["nama_team.$index"] = 'required|max:50';
            $rules["ketua.$index"] = 'required|max:100';
            $rules["email.$index"] = "required|email|max:150|unique:pesertas,email";
            $rules["telepon.$index"] = 'required|max:15';
            $rules["password.$index"] = 'required|min:8';
            $rules["cabang_lomba.$index"] = 'required|max:100';
            $rules["anggota_pertama.$index"] = 'required|max:100';
            $rules["telepon_anggota_pertama.$index"] = 'required|max:15';
            $rules["anggota_kedua.$index"] = 'required|max:100';
            $rules["telepon_anggota_kedua.$index"] = 'required|max:15';
            $rules["sekolah.$index"] = 'required|max:100';
            $rules["alamat_sekolah.$index"] = 'required|max:100';
            $rules["id_cabang.$index"] = 'required|exists:cabangs,id_cabang';
            $rules["id_rayon.$index"] = 'required|exists:rayons,id_rayon';
            $rules["gelombang_pembayaran.$index"] = 'required|exists:gelombang_pembayarans,id_gelombang';
            $rules["metode_pembayaran.$index"] = 'required|not_in:#|in:BNI,OVO,ShoopePay,Tunai';
            // $rules["bukti_pembayaran.$index"] = 'required|string';

            $messages["nama_team.$index.required"] = "Nama team '{$data['nama_team'][$index]}' harus diisi";
            $messages["nama_team.$index.max"] = "Nama team '{$data['nama_team'][$index]}' maksimal 50 karakter";
            $messages["ketua.$index.required"] = "Nama ketua '{$data['ketua'][$index]}' harus diisi";
            $messages["ketua.$index.max"] = "Nama ketua '{$data['ketua'][$index]}' maksimal 100 karakter";
            $messages["email.$index.required"] = "Email '{$data['email'][$index]}' harus diisi";
            $messages["email.$index.email"] = "Email '{$data['email'][$index]}' tidak valid";
            $messages["email.$index.max"] = "Email '{$data['email'][$index]}' maksimal 150 karakter";
            $messages["email.$index.unique"] = "Email '{$data['email'][$index]}' sudah terdaftar";
            $messages["telepon.$index.required"] = "Telepon '{$data['telepon'][$index]}' harus diisi";
            $messages["telepon.$index.max"] = "Telepon '{$data['telepon'][$index]}' maksimal 15 karakter";
            $messages["password.$index.required"] = "Password untuk '{$data['nama_team'][$index]}' harus diisi";
            $messages["password.$index.min"] = "Password untuk '{$data['nama_team'][$index]}' minimal 8 karakter";
            $messages["cabang_lomba.$index.required"] = "Cabang lomba '{$data['cabang_lomba'][$index]}' harus diisi";
            $messages["cabang_lomba.$index.max"] = "Cabang lomba '{$data['cabang_lomba'][$index]}' maksimal 100 karakter";
            $messages["anggota_pertama.$index.required"] = "Anggota pertama '{$data['anggota_pertama'][$index]}' harus diisi";
            $messages["anggota_pertama.$index.max"] = "Anggota pertama '{$data['anggota_pertama'][$index]}' maksimal 100 karakter";
            $messages["telepon_anggota_pertama.$index.required"] = "Telepon anggota pertama '{$data['telepon_anggota_pertama'][$index]}' harus diisi";
            $messages["telepon_anggota_pertama.$index.max"] = "Telepon anggota pertama '{$data['telepon_anggota_pertama'][$index]}' maksimal 15 karakter";
            $messages["anggota_kedua.$index.required"] = "Anggota kedua '{$data['anggota_kedua'][$index]}' harus diisi";
            $messages["anggota_kedua.$index.max"] = "Anggota kedua '{$data['anggota_kedua'][$index]}' maksimal 100 karakter";
            $messages["telepon_anggota_kedua.$index.required"] = "Telepon anggota kedua '{$data['telepon_anggota_kedua'][$index]}' harus diisi";
            $messages["telepon_anggota_kedua.$index.max"] = "Telepon anggota kedua '{$data['telepon_anggota_kedua'][$index]}' maksimal 15 karakter";
            $messages["sekolah.$index.required"] = "Sekolah '{$data['sekolah'][$index]}' harus diisi";
            $messages["sekolah.$index.max"] = "Sekolah '{$data['sekolah'][$index]}' maksimal 100 karakter";
            $messages["alamat_sekolah.$index.required"] = "Alamat sekolah '{$data['alamat_sekolah'][$index]}' harus diisi";
            $messages["alamat_sekolah.$index.max"] = "Alamat sekolah '{$data['alamat_sekolah'][$index]}' maksimal 100 karakter";
            $messages["id_cabang.$index.required"] = "Cabang peserta untuk '{$data['nama_team'][$index]}' harus diisi";
            $messages["id_cabang.$index.exists"] = "Cabang peserta untuk '{$data['nama_team'][$index]}' tidak valid";
            $messages["id_rayon.$index.required"] = "Rayon peserta untuk '{$data['nama_team'][$index]}' harus diisi";
            $messages["id_rayon.$index.exists"] = "Rayon peserta untuk '{$data['nama_team'][$index]}' tidak valid";
            $messages["gelombang_pembayaran.$index.required"] = "Gelombang pembayaran untuk '{$data['nama_team'][$index]}' harus diisi";
            $messages["gelombang_pembayaran.$index.exists"] = "Gelombang pembayaran untuk '{$data['nama_team'][$index]}' tidak valid";
            $messages["metode_pembayaran.$index.required"] = "Metode pembayaran untuk '{$data['nama_team'][$index]}' harus diisi";
            $messages["metode_pembayaran.$index.not_in"] = "Metode pembayaran untuk '{$data['nama_team'][$index]}' harus diisi";
            $messages["metode_pembayaran.$index.in"] = "Metode pembayaran untuk '{$data['nama_team'][$index]}' tidak valid";
            // $messages["bukti_pembayaran.$index.required"] = "Bukti pembayaran untuk '{$data['nama_team'][$index]}' harus diisi";
        }

        $validate = Validator::make($data, $rules, $messages);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        // Loop through the arrays and insert each row into the database
        foreach ($data['nama_team'] as $index => $value) {
            $peserta = new pesertas();
            $peserta->id_peserta = date('His').rand(1,999);
            $peserta->nomor = $this->event == 'olimpiade' ? '01-'.$peserta->id_peserta.'-'.rand(1,999) : '02-'.$peserta->id_peserta.'-'.rand(1,999);
            $peserta->nama_team = $data['nama_team'][$index];
            $peserta->nama = $data['ketua'][$index];
            $peserta->email = $data['email'][$index];
            $peserta->telepon = $data['telepon'][$index];
            $peserta->sekolah = $data['sekolah'][$index];
            $peserta->alamat_sekolah = $data['alamat_sekolah'][$index];
            $peserta->anggota_pertama = $data['anggota_pertama'][$index];
            $peserta->telepon_anggota_pertama = $data['telepon_anggota_pertama'][$index];
            $peserta->anggota_kedua = $data['anggota_kedua'][$index];
            $peserta->telepon_anggota_kedua = $data['telepon_anggota_kedua'][$index];
            $peserta->event = $data['cabang_lomba'][$index];
            $peserta->password = bcrypt($data['password'][$index]);
            $peserta->status_pembayaran = 'sudah';
            $peserta->status_data = 'belum';
            $peserta->keterangan = 'Data Perlu Dilengkapi Pada Dashboard User';
            $peserta->id_cabang = $data['id_cabang'][$index];
            $peserta->id_rayon = $data['id_rayon'][$index];
            $peserta->save();

            $pembayaran = new pembayarans();
            $pembayaran->tanggal = now();
            $pembayaran->metode_pembayaran = $data['metode_pembayaran'][$index];
            $pembayaran->bukti = $data['bukti_pembayaran'][$index];
            $pembayaran->id_peserta = $peserta->id_peserta;

            $pembayaran->id_gelombang = $data['gelombang_pembayaran'][$index];
            $pembayaran->status_pembayaran = 'lunas';
            $pembayaran->event = $data['cabang_lomba'][$index];
            $pembayaran->save();
        }

        toast('Peserta Berhasil Ditambahkan','success');
        return redirect()->route($this->event.'.peserta.index');
    }
}
