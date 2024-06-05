<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainOlimpiadeController extends Controller
{
    public function index()
    {
        $title = 'Olimpiade | Cardion UIN Malang';
        $slug = 'dashboard';

        return view('olimpiade.dashboard', compact('title', 'slug'));
    }
}
