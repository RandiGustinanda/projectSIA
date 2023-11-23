<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akun = \App\Models\Akun::All();
        return view( 'akun.akun' , ['akun' => $akun]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akun.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save_akun = new \App\Models\Akun;
        $save_akun->kdakun=$request->get('kode');
        $save_akun->nmakun=$request->get('nama');
        $save_akun->klasifikasi=$request->get('klasifikasi');
        $save_akun->subklasifikasi=$request->get('subklas');
        $save_akun->save();
        return redirect()->route( 'akun.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $akun_edit = \App\Models\Akun::findOrFail($id);
        return view( 'akun.edit' , ['akun' => $akun_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $akun = \App\Models\Akun::findOrFail($id);
        $akun->kdakun=$request->get('kode');
        $akun->nmakun=$request->get('nama');
        $akun->klasifikasi=$request->get('klasifikasi');
        $akun->subklasifikasi=$request->get('subklas');
        $akun->save();
        return redirect()->route( 'akun.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $akun = \App\Models\Akun::findOrFail($id);
        $akun->delete();
        return redirect()->route( 'akun.index');
    }
}
