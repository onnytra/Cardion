<?php

namespace App\Http\Controllers;

use App\Models\pembayarans;
use App\Models\pesertas;
use Illuminate\Http\Request;

class PembayaransController extends Controller
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
        $title = 'Pembayaran';
        $slug = 'pembayaran';

        $delete = 'Delete Pembayaran';
        $delete_message = 'Anda yakin ingin menghapus pembayaran ini ?';
        confirmDelete($delete, $delete_message);

        $pembayarans = pembayarans::where('event',$this->event)->get();
        // separate $pembayarans by status_pembayaran to lunas, menunggu, ditolak, belum_konfirmasi
        $lunas = $pembayarans->where('status_pembayaran', 'lunas');
        $menunggu = $pembayarans->where('status_pembayaran', 'menunggu');
        $ditolak = $pembayarans->where('status_pembayaran', 'ditolak');
        $belum_konfirmasi = $pembayarans->where('status_pembayaran', 'belum_konfirmasi');
        return view('admin/olimpiade/pembayaran', compact('title', 'slug', 'lunas', 'menunggu', 'ditolak', 'belum_konfirmasi'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(pembayarans $pembayarans)
    {
        //
    }

    public function edit(pembayarans $pembayarans)
    {
        //
    }

    public function update(Request $request, pembayarans $pembayarans)
    {
        //
    }

    public function destroy(pembayarans $pembayarans)
    {
        $peserta = pesertas::find($pembayarans->id_peserta);
        $peserta->update([
            'status_pembayaran' => 'belum'
        ]);
        $pembayarans->delete();
        toast('Pembayaran berhasil dihapus','success');
        if ($this->event == 'olimpiade') {
            return redirect()->route('olimpiade.pembayaran.index');
        }else{
            return redirect()->route('poster.pembayaran.index');
        }
    }

    public function tolak(pembayarans $pembayarans)
    {
        $peserta = pesertas::find($pembayarans->id_peserta);
        $peserta->update([
            'status_pembayaran' => 'belum'
        ]);
        $pembayarans->update([
            'status_pembayaran' => 'ditolak'
        ]);

        toast('Pembayaran berhasil ditolak','success');
        if ($this->event == 'olimpiade') {
            return redirect()->route('olimpiade.pembayaran.index');
        }else{
            return redirect()->route('poster.pembayaran.index');
        }
    }

    public function terima(pembayarans $pembayarans)
    {
        $peserta = pesertas::find($pembayarans->id_peserta);
        $peserta->update([
            'status_pembayaran' => 'sudah'
        ]);
        $pembayarans->update([
            'status_pembayaran' => 'lunas'
        ]);

        toast('Pembayaran berhasil diterima','success');
        if ($this->event == 'olimpiade') {
            return redirect()->route('olimpiade.pembayaran.index');
        }else{
            return redirect()->route('poster.pembayaran.index');
        }
    }
}
