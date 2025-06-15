<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SitusWebDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\PageCounterDBController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);
// Route::get('/pegawai/{nama}',[PegawaiController::class,'index'],'PegawaiController@index');
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

Route::get('template', function () {
	return view('template');
});

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/situsweb', [SitusWebDBController::class, 'indexweb']);
Route::get('/situsweb/tambahweb', [SitusWebDBController::class, 'tambahweb']);
Route::post('/situsweb/storeweb', [SitusWebDBController::class, 'storeweb']); //jika form dikirim, route ini akan dijalankan
Route::get('/situsweb/editweb/{id}',[SitusWebDBController::class, 'editweb']);
Route::post('/situsweb/updateweb',[SitusWebDBController::class, 'updateweb']);
Route::get('/situsweb/hapusweb/{id}', [SitusWebDBController::class, 'hapusweb']);
Route::get('/situsweb/cariweb', [SitusWebDBController::class, 'cariweb']);

Route::get('/karyawan', [KaryawanDBController::class, 'indexkaryawan']);
Route::get('/karyawan/tambahkaryawan', [KaryawanDBController::class, 'tambahkaryawan']);
Route::post('/karyawan/storekaryawan', [KaryawanDBController::class, 'storekaryawan']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapuskaryawan/{id}', [KaryawanDBController::class, 'hapuskaryawan']);
Route::get('/karyawan/carikaryawan', [KaryawanDBController::class, 'carikaryawan']);

Route::get('/page', [PageCounterDBController::class, 'index']);
