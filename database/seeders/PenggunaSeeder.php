<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
class PenggunaSeeder extends Seeder
{
 /**
 * Run the database seeds.
 * *
 * @return void
 */
 public function run()
 {
    $pengguna = new \App\Models\User;
    $pengguna->username = "admin";
    $pengguna->name = "Administrator";
    $pengguna->email = "adminpa11@bsi.ac.id";
    $pengguna->roles = json_encode(["ADMIN"]);
    $pengguna->password = \Hash::make( "admin");
    $pengguna->phone = "081851851851";
    $pengguna->address = "Jl Raya Jatiwaringin No. 101";
    $pengguna->status = "ACTIVE";
    $pengguna->save();
    $this->command->info( "User Admin berhasil diinsert");
    }
 }

