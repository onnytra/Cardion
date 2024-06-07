<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    public function index()
    {
        $title = 'Main Dashboard';
        $slug = 'admin';

        return view('admin.main.dashboard', compact('title', 'slug'));
    }

    public function dashboard_olimpiade()
    {
        $title = 'Dashboard Olimpiade';
        $slug = 'olimpiade';

        return view('admin.olimpiade.dashboard', compact('title', 'slug'));
    }

    public function dashboard_poster()
    {
        $title = 'Dashboard Poster';
        $slug = 'poster';

        return view('admin.public-poster.dashboard', compact('title', 'slug'));
    }
}
