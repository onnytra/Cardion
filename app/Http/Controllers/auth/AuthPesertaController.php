<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pesertas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AuthPesertaController extends Controller
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

    public function login_page()
    {
        $event = $this->event;
        if ($event == 'olimpiade') {
            $title = 'Olimpiade | Cardion UIN Malang';
        } else {
            $title = 'Poster | Cardion UIN Malang';
        }
        $slug = 'login';

        
        return view('olimpiade.login', compact('title', 'slug', 'event'));
    }

    public function login_process(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $remember = $request->remember;

        if(Auth::guard('peserta')->attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->route('user.dashboard');
        }
        
        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function register_page()
    {
        $event = $this->event;
        if ($event == 'olimpiade') {
            $title = 'Olimpiade | Cardion UIN Malang';
        } else {
            $title = 'Poster | Cardion UIN Malang';
        }
        $slug = 'register';

        return view('olimpiade.register', compact('title', 'slug', 'event'));
    }

    public function register_process(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required | max:100',
            'email' => 'required | email | unique:pesertas,email',
            'password' => 'required | min:8',
            'phone_number' => 'required | min:8 | max:15',
            'confirm_password' => 'required | same:password',
            'agreement' => 'required',
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama maksimal 100 karakter',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi password tidak boleh kosong',
            'confirm_password.same' => 'Konfirmasi password tidak sama dengan password',
            'phone_number.required' => 'Nomor telepon tidak boleh kosong',
            'phone_number.min' => 'Nomor telepon minimal 8 karakter',
            'phone_number.max' => 'Nomor telepon maksimal 15 karakter',
            'agreement.required ' => 'Anda harus menyetujui syarat dan ketentuan',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $peserta = new pesertas;
        $peserta->id_peserta = date('His').rand(1,999);
        $peserta->nomor = $this->event == 'olimpiade' ? '01-'.$peserta->id_peserta.'-'.rand(1,999) : '02-'.$peserta->id_peserta.'-'.rand(1,999);
        $peserta->nama = $request->name;
        $peserta->email = $request->email;
        $peserta->telepon = $request->phone_number;
        $peserta->password = Hash::make($request->password);
        $peserta->event = $this->event == 'olimpiade' ? 'olimpiade' : 'poster';
        $peserta->status_pembayaran = 'belum';
        $peserta->status_data = 'belum';
        $peserta->keterangan = 'Data Belum Dilengkapi';
        $peserta->save();

        return redirect()->route($this->event.'.login')->with('success', 'Registrasi Berhasil');
    }

    public function logout()
    {
        if(Auth::guard('peserta')->check()){
            Auth::guard('peserta')->logout();
            if ($this->event == 'olimpiade') {
                return redirect()->route('olimpiade.login');
            } else {
                return redirect()->route('poster.login');
            }
        }else{
            if ($this->event == 'olimpiade') {
                return redirect()->route('olimpiade.login');
            } else {
                return redirect()->route('poster.login');
            }
        }
    }

    public function edit_profile(pesertas $pesertas)
    {
        $event = $this->event;
        $title = 'Edit Profil';
        $slug = 'edit-profil';
        return view('olimpiade.account', compact('title', 'slug', 'pesertas', 'event'));
    }

    public function update_profile(Request $request, pesertas $pesertas)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required | email | unique:pesertas,email,'.$pesertas->id_peserta . ',id_peserta',
            'password' => 'nullable | min:8',
            'confirm_password' => 'nullable | same:password',
        ],[
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 8 karakter',
            'confirm_password.same' => 'Konfirmasi password tidak sama dengan password',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        if($request->password){
            $pesertas->password = Hash::make($request->password);
        }
        $pesertas->email = $request->email;
        $pesertas->save();

        toast()->success('Profil berhasil diubah');
        return redirect()->route('user.dashboard');
    }

    public function forgot_password(){
        $event = $this->event;
        if ($event == 'olimpiade') {
            $title = 'Olimpiade | Cardion UIN Malang';
        } else {
            $title = 'Poster | Cardion UIN Malang';
        }
        $slug = 'forget-password';

        return view('olimpiade.forgot_password', compact('title', 'slug', 'event'));
    }

    public function reset_password_page($token){
        $validate = Validator::make(['token' => $token], [
            'token' => 'required | exists:password_resets,token'
        ]);

        if ($validate->fails()) {
            return redirect()->route('olimpiade.login')->with('error', 'Permintaan Reset Password Tidak Ditemukan');
        }
        $email = DB::table('password_resets')->where('token', $token)->first()->email;

        $event = $this->event;
        if ($event == 'olimpiade') {
            $title = 'Olimpiade | Cardion UIN Malang';
        } else {
            $title = 'Poster | Cardion UIN Malang';
        }
        $slug = 'reset-password';

        return view('olimpiade.reset_password', compact('email', 'title', 'slug', 'event'));
    }

    public function reset_password_process(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'required | email | exists:pesertas,email',
            'password' => 'required | min:8',
            'confirm_password' => 'required | same:password'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi password tidak boleh kosong',
            'confirm_password.same' => 'Konfirmasi password tidak sama dengan password'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        DB::table('password_resets')->where('email', $request->email)->delete();
        $peserta = pesertas::where('email', $request->email)->first();
        $peserta->password = Hash::make($request->password);
        $peserta->save();

        if ($peserta->event == 'olimpiade') {
            return redirect()->route('olimpiade.login')->with('success', 'Password Berhasil Diubah');
        } else {
            return redirect()->route('poster.login')->with('success', 'Password Berhasil Diubah');
        }
    }
}
