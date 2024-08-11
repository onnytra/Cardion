<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertifikatsController extends Controller
{
    public function index()
    {
        $title = 'Sertifikat';
        $slug = 'sertifikat';
        
        return view('admin.main.sertifikat', compact('title', 'slug'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'file-upload' => 'required|image|mimes:png',
        ]);

        $file = $request->file('file-upload');
        $filename = 'sertifikat-peserta.png';
        $file->move(public_path('img'), $filename);

        toast('Template Sertifikat berhasil diperbarui!', 'success');
        return redirect()->route('dashboard.sertifikat.index');
    }
}
