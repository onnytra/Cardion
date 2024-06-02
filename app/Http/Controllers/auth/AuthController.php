<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function admin_login_page()
    {
        $title = 'Login';
        $slug = 'login';

        return view('admin.login', compact('title', 'slug'));
    }

    public function admin_login_process(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $remember = $request->remember;

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function admin_logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('auth.admin.login');
        }else{
            return redirect()->route('auth.admin.login');
        }
    }

    public function edit_profile(User $users)
    {
        $title = 'Edit Profil';
        $slug = 'edit-profil';

        return view('admin.main.user.account', compact('title', 'slug'));
    }

    public function update_profile(Request $request, User $users)
    {
        $validate = Validator::make($request->all(),[
            'nama' => 'required | max:100',
            'email' => 'required | email | unique:users,email,'.$users->id_user . ',id_user',
            'password' => 'nullable | min:8',
            'verify_password' => 'nullable | same:password',
        ],[
            'nama.required' => 'Nama harus diisi',
            'nama.max' => 'Nama maksimal 100 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 8 karakter',
            'verify_password.same' => 'Konfirmasi password tidak sama dengan password',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        if($request->password){
            $users->password = bcrypt($request->password);
        }
        $users->name = $request->nama;
        $users->email = $request->email;
        $users->save();

        toast()->success('Profil berhasil diubah');
        return redirect()->route('dashboard.index');
    }
}
