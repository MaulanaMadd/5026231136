<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanDBController extends Controller
{
    public function indexnewkaryawan()
    {
        $newkaryawan = DB::table('newkaryawan')->get();

    	// mengirim data pegawai ke view index
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambahnewkaryawan(){
        // memanggil view tambah
        return view('tambahnewkaryawan');
    }

    // method untuk insert data ke table pegawai
public function storenewkaryawan(Request $request)
    {
        $request->validate([
        'NIP' => 'required|unique:newkaryawan,NIP',
        'nama' => 'required',
        'pangkat' => 'required',
        'gaji' => 'required',
    ], [
        'NIP.unique' => 'NIP SUDAH ADA di tabel.',
    ]);

    DB::table('newkaryawan')->insert([
                'NIP' => $request->NIP,
                'nama' => $request->nama,
                'pangkat' => $request->pangkat,
                'gaji'  => $request->gaji,
    ]);

    return redirect('/eas');
    }

// method untuk hapus data pegawai
public function hapusnewkaryawan($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('newkaryawan')->where('NIP',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
}

	/*public function carikaryawan(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}*/
}

