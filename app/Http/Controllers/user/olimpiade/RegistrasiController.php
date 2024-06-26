<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\cabangs;
use App\Models\pesertas;
use App\Models\rayons;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrasiController extends Controller
{
    public function index(){
        $title = 'Registrasi Peserta';
        $slug = 'registrasi';
        $data = Auth::guard('peserta')->user();
        $event = $data->event;
        if($data->status_data == 'sudah'){
            toast('Data Sudah Disimpan', 'info');
            return redirect()->route('user.dashboard');
        }
        if ($data->id_cabang != null) {
            $cabangs = cabangs::where('event', $event)->get();
            $rayons = rayons::where('id_rayon', $data->id_rayon)->get();
        }else{
            $cabangs = cabangs::where('event', $event)->get();
            $rayons = [];
        }
        return view('olimpiade.registrasi', compact('title', 'slug', 'data', 'cabangs', 'rayons'));
    }

    public function update_data_peserta(Request $request){
        $peserta = Auth::guard('peserta')->user();
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
            'email' => 'required | email | max:150 | unique:pesertas,email,'.$peserta->id_peserta.',id_peserta',
            'telepon' => 'required | max:15',
            'sekolah' => 'required | max:100',
            'alamat_sekolah' => 'required | max:100',
            'id_cabang' => 'required | exists:cabangs,id_cabang',
            'id_rayon' => 'required | exists:rayons,id_rayon',
            'zona_waktu' => 'required | not_in:#',
            'nama_team' => 'required | max:50',
            //check if password is empty
            'password' => $request->password ? 'required | min:8' : '',
            'verify_password' => $request->password ? 'required | same:password' : '',
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
            'zona_waktu.required' => 'Zona waktu peserta harus diisi',
            'zona_waktu.not_in' => 'Zona waktu peserta tidak valid',
            'nama_team.required' => 'Nama team peserta harus diisi',
            'nama_team.max' => 'Nama team peserta maksimal 50 karakter',
            'password.required' => 'Password peserta harus diisi',
            'password.min' => 'Password peserta minimal 8 karakter',
            'verify_password.required' => 'Konfirmasi password peserta harus diisi',
            'verify_password.same' => 'Konfirmasi password peserta tidak sama dengan password peserta',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

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
        $peserta->id_cabang = $request->id_cabang;
        $peserta->id_rayon = $request->id_rayon;
        $peserta->zona_waktu = $request->zona_waktu;
        $peserta->status_data = 'sudah';
        $peserta->password = $request->password ? bcrypt($request->password) : $peserta->password;
        $peserta->keterangan = 'Peserta Aktif';
        $peserta->save();

        toast('Data Berhasil Disimpan', 'success');
        return redirect()->route('user.dashboard');
    }
}
