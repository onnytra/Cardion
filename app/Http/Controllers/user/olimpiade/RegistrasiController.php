<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index(){
        $title = 'Registrasi Olimpiade';
        $slug = 'registrasi';

        return view('olimpiade.registrasi', compact('title', 'slug'));
    }
}
