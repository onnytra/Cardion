<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MailsController extends Controller
{
    public function index() {
        $passingDataToView = 'Simple Mail Send In Laravel!';
        $data["email"] = 'onnytra@gmail.com';
        $data["title"] = "Mail Testing";

        Mail::send('mail.simplemail', ['passingDataToView'=> $passingDataToView], function ($message) use ($data){
            $message->to($data["email"]);
            $message->subject($data["title"]);
        });

        return 'Mail Sent';
    }

    public function forgot_password(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'required|email|exists:pesertas,email|unique:password_resets,email'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah digunakan untuk permintaan reset password, hubungi admin untuk permintaan lain',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar'
        
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $token = md5($request->email . time());
        $data = [
            'email' => $request->email,
            'token' => $token
        ];
        DB::table('password_resets')->insert($data);

        $passingDataToView = $token;
        $data["email"] = $request->email;
        $data["title"] = "Forgot Password";

        Mail::send('mail.reset_password', ['passingDataToView'=> $passingDataToView], function ($message) use ($data){
            $message->to($data["email"]);
            $message->subject($data["title"]);
        });

        return redirect()->route('olimpiade.login')->with('success', 'Permintaan Reset Password Berhasil, Silahkan Cek Email Anda');
    }
}
