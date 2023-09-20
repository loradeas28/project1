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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return 'Hello World';
});

Route::get('/mahasiswa/{nama}', function ($nama){
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/guru/{nama}', function ($nama){
    return "Tampilkan data guru bernama $nama";
});

Route::get('/siswa', function (){
    $array_nama = ["Tania","Reno","Woni"];
    return view ('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});