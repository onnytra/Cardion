<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index (){
        $title = 'Settings';
        $slug = 'settings';

        return view('admin.main.settings', compact('title', 'slug'));
    }

    public function update(Request $request)
{
    $request->validate([
        'login' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'register' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    if ($request->hasFile('login')) {
        $file = $request->file('login');
        $tempPath = $file->storeAs('temp', $file->getClientOriginalName()); // Simpan file di direktori sementara
        
        $filename_build = 'bg-login-1152a7b5.png';
        copy(storage_path('app/' . $tempPath), public_path('build/assets/' . $filename_build));
        
        $filename_img = 'bg-login.png';
        copy(storage_path('app/' . $tempPath), public_path('img/' . $filename_img));
        
        // Hapus file sementara
        unlink(storage_path('app/' . $tempPath));
    }

    if ($request->hasFile('register')) {
        $file = $request->file('register');
        $tempPath = $file->storeAs('temp', $file->getClientOriginalName()); // Simpan file di direktori sementara
        
        $filename_build = 'bg-register-da4c61b1.png';
        copy(storage_path('app/' . $tempPath), public_path('build/assets/' . $filename_build));
        
        $filename_img = 'bg-register.png';
        copy(storage_path('app/' . $tempPath), public_path('img/' . $filename_img));
        
        // Hapus file sementara
        unlink(storage_path('app/' . $tempPath));
    }

    toast('Settings berhasil diperbarui!', 'success');
    return redirect()->route('dashboard.setting.index');
}


}
