<?php

use App\Http\Controllers\AkunCtl;
use App\Http\Controllers\LoginCtl;
use App\Http\Controllers\SessionCtl;
use App\Http\Controllers\HomeCtl;
use App\Http\Controllers\JabatanCtl;
use App\Http\Controllers\UsahaCtl;
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
    return view('login');
});

Route::view('/login','login');
Route::post('/login.add',[LoginCtl::class,'add']);
Route::get('login.del',[LoginCtl::class,'del']);


Route::get('/session.view',[SessionCtl::class,'view']);
Route::get('/session.add.{userid}',[SessionCtl::class,'add']);
Route::get('/session.del',[SessionCtl::class,'del']);

Route::view('/home','home');

Route::view('/about','about');
Route::view('/usaha','usaha');

Route::get('/pegawai',[PegawaiCtl::class,'index']);

Route::get('/home',[HomeCtl::class,'index']);
Route::get('/home.view.{id}',[HomeCtl::class,'view']);

Route::get('/jabatan',[JabatanCtl::class,'index']);
Route::get('/jabatan.cetak',[JabatanCtl::class,'cetak']);
Route::get('/jabatan.add',[JabatanCtl::class,'add']);
Route::post('/jabatan.addsave',[JabatanCtl::class,'addsave']);
Route::get('/jabatan.edit.{id}',[JabatanCtl::class,'edit']);
Route::put('/jabatan.editsave.{id}',[JabatanCtl::class,'editsave']);
Route::get('/jabatan.del.{id}',[JabatanCtl::class,'del']);

Route::get('/usaha',[UsahaCtl::class,'index']);


