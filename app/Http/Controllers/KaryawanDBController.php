<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function indexkaryawan()
    {
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);
    }

// method untuk menampilkan view form tambah pegawai
    public function tambahkaryawan(){
        // memanggil view tambah
        return view('tambahkaryawan');
    }

    // method untuk insert data ke table pegawai
public function storekaryawan(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'namalengkap' => 'required|string|max:50',
            'divisi'      => 'nullable|string|max:5',
            'departemen'  => 'nullable|string|max:10',
        ]);

        DB::transaction(function () use ($request) {

            // 1. Hitung nomor terbesar, kunci tabel agar aman
            $next = DB::table('karyawan')
                      ->selectRaw("
                          COALESCE(
                              MAX(CAST(SUBSTRING(kodepegawai,2) AS UNSIGNED)), 0
                          ) + 1 AS urut
                      ")
                      ->lockForUpdate()     // mencegah race-condition
                      ->value('urut');      // ambil angka saja

            // 2. Format jadi 5-karakter: E0001, E0002, ...
            $kode = 'E' . str_pad($next, 4, '0', STR_PAD_LEFT);

            // 3. Insert lengkap
            DB::table('karyawan')->insert([
                'kodepegawai' => $kode,
                'namalengkap' => $request->namalengkap,
                'divisi'      => $request->divisi,
                'departemen'  => $request->departemen,
            ]);
        });

        return redirect('/karyawan');
    }

// method untuk hapus data pegawai
public function hapuskaryawan($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}

	public function carikaryawan(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}
}

