<?php

namespace App\Http\Controllers;

use App\Models\assign_tests;
use App\Models\pengumpulan_karyas;
use App\Models\pesertas;
use App\Models\ujians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssignTestsController extends Controller
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

    public function get_tests(){
        if ($this->event == 'olimpiade'){
            $tests = ujians::all();
        } elseif ($this->event == 'poster') {
            $tests = pengumpulan_karyas::all();
        }
        return $tests;
    }

    public function show_tests(){
        $title = 'Assign Tests';
        $slug = 'assign_tests';
        $event = $this->event;
        $function = new AssignTestsController();
        $tests = $function->get_tests();

        return view('admin.olimpiade.assign-test.assign-test', compact('title', 'slug', 'tests', 'event'));
    }
    
    public function index($id)
    {
        $title = 'Assign Tests';
        $slug = 'assign_tests';
        $event = $this->event;
        $delete = "Delete Assign Test Peserta";
        $delete_message = "Anda Yakin Ingin Menghapus Assign Test Peserta Ini?";
        confirmDelete($delete, $delete_message);

        
        if ($this->event == 'olimpiade'){
            $ujian = ujians::find($id);
            $ujian->mulai = $ujian->sesi->min('mulai');
            $ujian->berakhir = $ujian->sesi->max('berakhir');
            $ujian->sesi = $ujian->sesi->count();
            $ujian->peserta = $ujian->assign_tests->count();
            $pesertas = pesertas::where('event', $this->event)
            ->where('status_pembayaran', 'sudah')
            ->where('status_data', 'sudah')
            ->whereNotIn('id_peserta', function($query) use ($id) {
                $query->select('id_peserta')->from('assign_tests')->where('id_ujian', $id);
            })
            ->get(['id_peserta','nama','email','id_rayon']);
            $assign_tests = assign_tests::where('id_ujian', $id)->get();
            return view('admin.olimpiade.assign-test.detail-assign-test', compact('slug','title', 'assign_tests', 'ujian', 'pesertas', 'event'));
        } elseif ($this->event == 'poster') {
            $pengumpulan_karya = pengumpulan_karyas::find($id);
            $pengumpulan_karya->mulai = $pengumpulan_karya->mulai;
            $pengumpulan_karya->berakhir = $pengumpulan_karya->berakhir;
            $pengumpulan_karya->peserta = $pengumpulan_karya->assign_tests->count();
            $pesertas = pesertas::where('event', $this->event)
            ->where('status_pembayaran', 'sudah')
            ->where('status_data', 'sudah')
            ->whereNotIn('id_peserta', function($query) use ($id) {
                $query->select('id_peserta')->from('assign_tests')->where('id_pengumpulan', $id);
            })
            ->get(['id_peserta','nama','email','id_rayon']);
            $assign_tests = assign_tests::where('id_pengumpulan', $id)->get();
            return view('admin.public-poster.assign-test.detail-assign-test', compact('slug','title', 'assign_tests', 'pengumpulan_karya', 'pesertas', 'event'));
        }else{
            toast('Data Tidak Ditemukan', 'error');
            return redirect()->back();
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $id_ujian)
    {
        if ($request->peserta[0] == 'all'){
        $pesertas = pesertas::where('event', $this->event)
            ->where('status_pembayaran', 'sudah')
            ->where('status_data', 'sudah')
            ->whereNotIn('id_peserta', function($query) use ($id_ujian) {
                $query->select('id_peserta')->from('assign_tests')->where('id_ujian', $id_ujian);
            })
            ->get(['id_peserta']);
        } else {
            $pesertas = collect($request->peserta)->map(function($pesertaId) {
                return ['id_peserta' => $pesertaId];
            });
        }
        foreach ($pesertas as $peserta) {
            $assign_tests = new assign_tests();
            $assign_tests->id_peserta = $peserta['id_peserta'];
            if ($this->event == 'olimpiade'){
                $assign_tests->id_ujian = $id_ujian;
            } elseif ($this->event == 'poster') {
                $assign_tests->id_pengumpulan = $id_ujian;
            }
            $assign_tests->status_test = 'belum';
            $assign_tests->save();
        }

        toast('Data Berhasil Disimpan', 'success');
        return redirect()->route($this->event.'.assign_test.index', $id_ujian);
    }

    public function show(assign_tests $assign_tests)
    {
        //
    }

    public function edit(assign_tests $assign_tests)
    {
        //
    }

    public function update(Request $request, assign_tests $assign_tests)
    {
        //
    }

    public function destroy(assign_tests $assign_tests)
    {
        $assign_tests->delete();
        toast('Data Berhasil Dihapus', 'success');
        return redirect()->back();
    }
}
