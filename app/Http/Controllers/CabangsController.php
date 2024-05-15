<?php

namespace App\Http\Controllers;

use App\Models\cabangs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CabangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabangs = cabangs::all();
        return view('admin/olimpiade/cabang/cabang', compact('cabangs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/olimpiade/cabang/add-cabang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama_cabang' => 'required | max:100',
            'deskripsi' => 'required',
            'status' => 'required | not_in:#',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cabangs  $cabangs
     * @return \Illuminate\Http\Response
     */
    public function show(cabangs $cabangs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cabangs  $cabangs
     * @return \Illuminate\Http\Response
     */
    public function edit(cabangs $cabangs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cabangs  $cabangs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cabangs $cabangs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cabangs  $cabangs
     * @return \Illuminate\Http\Response
     */
    public function destroy(cabangs $cabangs)
    {
        //
    }
}
