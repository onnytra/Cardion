<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use App\Models\gelombang_pembayarans;
use App\Models\pembayarans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
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

    public function index(){
        $title = 'Pembayaran Peserta';
        $slug = 'pembayaran';

    $data = Auth::guard('peserta')->user();
        if($data->status_pembayaran == 'sudah'){
            toast('Pembayaran Sudah Dilakukan', 'info');
        }
        if($data->status_data == 'belum'){
            toast('Data Registrasi Belum Diupdate', 'info');
            return redirect()->route('user.registrasi');
        }
        $pembayaran = pembayarans::where('id_peserta', $data->id_peserta)->first();
        return view('olimpiade.pembayaran.pembayaran', compact('title', 'slug', 'data', 'pembayaran'));
    }

    public function create(){
        $title = 'Pembarayan Peserta';
        $slug = 'pembayaran';
        $gelombangpembayaran =  gelombang_pembayarans::where('event', $this->event)
        ->where('status_gelombang_pembayaran', 1)
        ->where('mulai', '<=', date('Y-m-d'))
        ->where('selesai', '>=', date('Y-m-d'))
        ->get();
        return view('olimpiade.pembayaran.add-pembayaran', compact('title', 'slug', 'gelombangpembayaran'));
    }

    public function store(Request $request){
        $validation = Validator::make($request->all(), [
            'nama' => 'required | max:150',
            'bank' => 'required | max:50',
            'tanggal' => 'required | date',
            'metode_pembayaran' => 'required | not_in:#',
            'bukti_pembayaran' => 'required | mimes:jpg,jpeg,png | max:2048',
            'gelombang_pembayaran' => 'required | not_in:#',
        ],[
            'nama.required' => 'Nama Pemilik Rekening Harus Diisi',
            'nama.max' => 'Nama Pemilik Rekening Maksimal 150 Karakter',
            'bank.required' => 'Nama Bank Harus Diisi',
            'bank.max' => 'Nama Bank Maksimal 50 Karakter',
            'tanggal.required' => 'Tanggal Transfer Harus Diisi',
            'tanggal.date' => 'Tanggal Transfer Harus Berupa Tanggal',
            'metode_pembayaran.required' => 'Metode Pembayaran Harus Dipilih',
            'metode_pembayaran.not_in' => 'Metode Pembayaran Harus Dipilih',
            'bukti_pembayaran.required' => 'Bukti Pembayaran Harus Diunggah',
            'bukti_pembayaran.mimes' => 'Bukti Pembayaran Harus Berupa File: jpg, jpeg, png',
            'bukti_pembayaran.max' => 'Bukti Pembayaran Maksimal 2MB',
            'gelombang_pembayaran.required' => 'Gelombang Pembayaran Harus Dipilih',
            'gelombang_pembayaran.not_in' => 'Gelombang Pembayaran Harus Dipilih',
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $data = Auth::guard('peserta')->user();
        $pembayaran = new pembayarans();
        $pembayaran->id_peserta = $data->id_peserta;
        $pembayaran->nama_rekening = $request->nama;
        $pembayaran->bank = $request->bank;
        $pembayaran->tanggal = $request->tanggal;
        $pembayaran->metode_pembayaran = $request->metode_pembayaran;
        $pembayaran->id_gelombang = $request->gelombang_pembayaran;
        $pembayaran->status_pembayaran = 'belum_konfirmasi';
        // save the image to storage in directory pembayaran
        $file = $request->file('bukti_pembayaran');
        $filename = 'pembayaran/'.time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public', $filename);
        $pembayaran->bukti = $filename;
        $pembayaran->event = $data->event;
        $pembayaran->save();

        toast('Pembayaran Berhasil Diinput', 'success');
        return redirect()->route('user.pembayaran');
    }

    public function edit(){
        $title = 'Edit Pembayaran';
        $slug = 'pembayaran';

        $pembayarans = pembayarans::where('id_peserta', Auth::guard('peserta')->user()->id_peserta)->first();
        return view('olimpiade.pembayaran.edit-pembayaran', compact('title', 'slug', 'pembayarans'));
    }

    public function update(Request $request){
        $validation = Validator::make($request->all(), [
            'nama' => 'required | max:150',
            'bank' => 'required | max:50',
            'tanggal' => 'required | date',
            'metode_pembayaran' => 'required | not_in:#',
            'bukti_pembayaran' => 'mimes:jpg,jpeg,png | max:2048',
        ],[
            'nama.required' => 'Nama Pemilik Rekening Harus Diisi',
            'nama.max' => 'Nama Pemilik Rekening Maksimal 150 Karakter',
            'bank.required' => 'Nama Bank Harus Diisi',
            'bank.max' => 'Nama Bank Maksimal 50 Karakter',
            'tanggal.required' => 'Tanggal Transfer Harus Diisi',
            'tanggal.date' => 'Tanggal Transfer Harus Berupa Tanggal',
            'metode_pembayaran.required' => 'Metode Pembayaran Harus Dipilih',
            'metode_pembayaran.not_in' => 'Metode Pembayaran Harus Dipilih',
            'bukti_pembayaran.mimes' => 'Bukti Pembayaran Harus Berupa File: jpg, jpeg, png',
            'bukti_pembayaran.max' => 'Bukti Pembayaran Maksimal 2MB',
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $data = Auth::guard('peserta')->user();
        $pembayaran = pembayarans::where('id_peserta', $data->id_peserta)->first();
        $pembayaran->nama_rekening = $request->nama;
        $pembayaran->bank = $request->bank;
        $pembayaran->tanggal = $request->tanggal;
        $pembayaran->metode_pembayaran = $request->metode_pembayaran;
        $pembayaran->status_pembayaran = 'belum_konfirmasi';
        if($request->hasFile('bukti_pembayaran')){
            // delete the old image
            $oldfile = $pembayaran->bukti;
            if($oldfile){
                if(file_exists(storage_path('app/public/'.$oldfile))){
                    unlink(storage_path('app/public/'.$oldfile));
                }
            }
            // save the new image
            $file = $request->file('bukti_pembayaran');
            $filename = 'pembayaran/'.time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);
            $pembayaran->bukti = $filename;
        }
        $pembayaran->save();

        toast('Pembayaran Berhasil Diupdate', 'success');
        return redirect()->route('user.pembayaran');
    }

    public function konfirmasi_pembayaran_user(){
        $pembayaran = pembayarans::where('id_peserta', Auth::guard('peserta')->user()->id_peserta)->first();
        $pembayaran->status_pembayaran = 'menunggu';
        $pembayaran->save();

        toast('Pembayaran Berhasil Dikonfirmasi', 'success');
        return redirect()->route('user.pembayaran');
    }
}
