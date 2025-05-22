<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);
Route::get('/pegawai/{nama}',[PegawaiController::class,'index'],'PegawaiController@index');
Route::get('/formulir',[PegawaiController::class,'formulir']);
Route::post('/formulir/proses',[PegawaiController::class,'proses']);

// route blog
Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

/*Route::get('blog', function () {
	return view('blog');
});*/

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('cssopacity', function () {
	return view('cssopacity');
});

Route::get('griditem', function () {
	return view('griditem');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('latihanlayoutno5', function () {
	return view('latihanlayoutno5');
});

Route::get('mocklinktree', function () {
	return view('mocklinktree');
});

Route::get('validasi1', function () {
	return view('validasi1');
});
