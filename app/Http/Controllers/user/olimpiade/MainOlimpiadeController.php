<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainOlimpiadeController extends Controller
{
    public function index()
    {
        $title = 'Cardion UIN Malang';
        $slug = 'dashboard';
        $event = Auth::guard('peserta')->user()->event;
        return view('olimpiade.dashboard', compact('title', 'slug', 'event'));
    }
}
