<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bahar');
});
Route::get('/bahar',function (){return  view('Bahar');})->name("bahar");
Route::get('/goz',function (){return  view('Goz');})->name("goz");
Route::get('/hocaBilgileri',function (){return  view('HocaBilgileri');})->name("hoca_bilgileri");
Route::get('/hocaEkle',function (){return  view('HocaEkle');})->name("hoca_ekle");
Route::get('/ogrenci',function (){return  view('OgrenciBilgileri');})->name("ogrenci_bilgileri");
Route::get('/ogrenci_ekle',function (){return  view('OgrenciEkle');})->name("ogrenci_ekle");