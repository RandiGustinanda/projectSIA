<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukubesarController extends Controller
{
    public function index()
    {
    $bb = \App\Models\Bukubesar::orderBy('created_at', 'DESC')->get();
    return view( 'bukubesar.bukubesar' , ['bukubesar' => $bb]);
    }
}
