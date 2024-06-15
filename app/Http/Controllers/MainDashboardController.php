<?php

namespace App\Http\Controllers;

use App\Models\pembayarans;
use App\Models\pesertas;
use App\Models\ujians;
use App\Models\pengumpulan_karyas;
use App\Models\rayons;
use stdClass;

use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    public $event, $datas;

    public function __construct()
    {
        $route = request()->route();

        if ($route) {
            $action = $route->getAction();
            $this->event = $action['event'] ?? null;
        } else {
            $this->event = null;
        }

        $this->datas = new stdClass();
        $datas = $this->datas;
        $datas->tanggal = '2021-08-01 - '. date('Y-m-d');
        $datas->peserta = pesertas::where('event', $this->event)->count();
        $datas->target_peserta = 100;
        $datas->persen = ($datas->peserta / $datas->target_peserta) * 100;
        $datas->peserta_belumlunas = pesertas::where('event', $this->event)->where('status_pembayaran', 'belum')->count();
        $datas->pembayaran_menunggu = pembayarans::where('event', $this->event)->where('status_pembayaran', 'menunggu')->count();
        $datas->transaksi = pembayarans::where('event', $this->event)->where('status_pembayaran', 'lunas')
        ->with('gelombang_pembayarans')
        ->get()
        ->sum(function ($pembayaran) {
            return $pembayaran->gelombang_pembayarans->harga ?? 0;
        });
        if($this->event == 'olimpiade'){
            $datas->ujian = ujians::where('status_ujian', 1)->count();
        }elseif($this->event == 'poster'){
            $datas->ujian = pengumpulan_karyas::where('status_pengumpulan', 1)->count();
        }
    }

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

        $datas = $this->datas;

        return view('admin.olimpiade.dashboard', compact('title', 'slug', 'datas'));
    }

    public function dashboard_poster()
    {
        $title = 'Dashboard Poster';
        $slug = 'poster';

        $datas = $this->datas;

        return view('admin.public-poster.dashboard', compact('title', 'slug', 'datas'));
    }
}
