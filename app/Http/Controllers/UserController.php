<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = \App\Models\User::All();
        return view( 'user' , ['user' => $user]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $pass=$request->get('passw');
            $kpass=$request->get('kpassw');
            if ($pass == $kpass){
            $save_user = new \App\Models\User;
            $save_user->name=$request->get('nama');
            $save_user->email=$request->get('email');
            $save_user->username=$request->get('usname');
            $save_user->password=\Hash::make($request->get( 'passw' ));
            $save_user->roles=json_encode($request->get('roles'));
            $save_user->address=$request->get('alamat');
            $save_user->phone=$request->get('tlp');
            $save_user->status=$request->get('status');
            $save_user->save();
        }
return redirect()->route('user.index');
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
        $user_edit = \App\Models\User::findOrFail($id);
        return view( 'edit' , ['user' => $user_edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pass=$request->get('passw');
        $kpass=$request->get('kpassw');
        $user = \App\Models\User::findOrFail($id);
        if($request->get('ubahpass') == 'ubah'){
        if ($pass == $kpass){
        $user->name=$request->get('nama');
        $user->email=$request->get('email');
        $user->username=$request->get('usname');
        $user->roles=json_encode($request->get('roles'));
        $user->address=$request->get('alamat');
        $user->phone=$request->get('tlp');
        $user->status=$request->get('status');
        $user->password=\Hash::make($request->get( 'passw' ));
        $user->save();
        }
        }else{
        $user->name=$request->get('nama');
        $user->email=$request->get('email');
        $user->username=$request->get('usname');
        $user->roles=json_encode($request->get('roles'));
        $user->address=$request->get('alamat');
        $user->phone=$request->get('tlp');
        $user->status=$request->get('status');
        $user->save();
        }
        return redirect()->route( 'user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->route( 'user.index');
    }
}
