<?php

use App\Http\Controllers\InputController;
use App\Models\GajiKaryawan;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

// Pergi ke halaman volume keliling balok, kalau data belum diinput
Route::get('/soalpertama', function() {
    return view('volume_keliling_balok', [
        'title'=>'Volume dan Keliling Balok'
    ]);
});
// Menerima input dari halaman volume_keliling_balok
Route::post('/input_vkb', [InputController::class, 'hitung']);

// Pergi ke halaman form gaji karyawan
Route::get('/soalkedua', function() {
    return view('form_gaji_karyawan', [
        'title'=>'Form Gaji karyawan PT XYZ'
    ]);
});

//Menerima inputtan dari volume_keliling_balok
Route::post('/inputvolume',[InputController::class, 'volume']);

// redirect user ke laman inputtan gaji karyawan
Route::get('/form_gaji_karyawan',[GajiKaryawan::class, 'laman']);
// menerima inputtan gaji karyawan
Route::post('/input_gaji_karyawan',[GajiKaryawan::class, 'input']);

// menampilkan daftar gaji karyawan dari database
Route::get('/soalketiga',[GajiKaryawan::class, 'retrieve']);

// halaman utama
Route::get('/', function() {
    return view('halaman_utama',[
        'title'=>'Halaman Utama'
    ]);
});