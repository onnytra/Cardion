<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Imports\PesertasImport;
use App\Models\cabangs;
use App\Models\rayons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
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
    public function importpeserta(Request $request)
    {
        $event = $this->event;
        $validate = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls'
        ],[
            'file.required' => 'File tidak boleh kosong',
            'file.mimes' => 'File harus berformat xlsx atau xls'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $path = $request->file('file')->getRealPath();
        $data = Excel::toArray(new PesertasImport, $path);
        return redirect()->route($event.'.peserta.check-peserta-excel', compact('data'));
    }

    public function formatexcel()
    {
        // return Excel::download(new PesertasImport, 'format-excel.xlsx');
        // donwload file from public folder
        return response()->download(public_path('format-excel.xlsx'));
    }
}
