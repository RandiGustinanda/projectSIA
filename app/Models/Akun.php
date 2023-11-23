<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = "akun";
protected $fillable = [
'id', 'kdakun', 'nmakun', 'klasifikasi', 'subklasifikasi', 'jmlcr'
];
}
