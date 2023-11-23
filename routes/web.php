<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/inces', function () {
    return "Jangan Lupa Senyum:)";
   });
Auth::routes();
Route::resource( '/user' , App\Http\Controllers\UserController::class );
Route::get('/user/hapus/{kode}', [App\Http\Controllers\UserController::class, 'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource( '/akun' , App\Http\Controllers\AkunController::class );
Route::get('/akun/hapus/{kode}',[App\Http\Controllers\AkunController::class, 'destroy']);
Route::resource( '/kaskeluar', App\Http\Controllers\KaskeluarController::class);
Route::get('/kaskeluar/hapus/{id}',[App\Http\Controllers\KaskeluarController::class, 'destroy']);
Route::resource( '/bukubesar' , App\Http\Controllers\BukubesarController::class );
Route::resource( '/kasmasuk', App\Http\Controllers\KasMasukController::class);
Route::resource( '/laporan' , App\Http\Controllers\LaporanController::class );