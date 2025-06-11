<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitusWebDBController extends Controller
{
    public function indexweb()
    {
        $situsweb = DB::table('situsweb')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexweb',['situsweb' => $situsweb]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambahweb(){
        // memanggil view tambah
        return view('tambahweb');
    }

    // method untuk insert data ke table pegawai
public function storeweb(Request $request)
{
	// insert data ke table pegawai
	DB::table('situsweb')->insert([
		'situsweb_nama' => $request->nama,
		'situsweb_url' => $request->url,
		'situsweb_aktif' => $request->aktif ? 1 : 0,
		'situsweb_uptime' => $request->uptime
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/situsweb');

}

// method untuk edit data pegawai
public function editweb($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$situsweb = DB::table('situsweb')->where('situsweb_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editweb',['situsweb' => $situsweb]);

}

// update data pegawai
public function updateweb(Request $request)
{
	// update data pegawai
	DB::table('situsweb')->where('situsweb_id',$request->id)->update([
		'situsweb_nama' => $request->nama,
		'situsweb_url' => $request->url,
		'situsweb_aktif' => $request->aktif ? 1 : 0,
		'situsweb_uptime' => $request->uptime
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/situsweb');
}

// method untuk hapus data pegawai
public function hapusweb($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('situsweb')->where('situsweb_id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/situsweb');
}

	public function cariweb(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$situsweb = DB::table('situsweb')
		->where('situsweb_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexweb',['situsweb' => $situsweb]);

	}
}

