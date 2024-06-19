<?php

namespace App\Http\Controllers\user\olimpiade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainOlimpiadeController extends Controller
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
    public function index()
    {
        $title = 'Cardion UIN Malang';
        $slug = 'dashboard';
        $event = $this->event;
        
        return view('olimpiade.dashboard', compact('title', 'slug', 'event'));
    }
}
