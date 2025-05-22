<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
    //return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    $nama = "Diki Alfarabi Hadi";
    $umur = 35;
    $alamat = "Surabaya";
    $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    return view('biodata',['nama'=>$nama,'usia'=>$umur,'alamat'=>$alamat,'matkul'=>$pelajaran]);
}
public function welcome(){
    return view('welcome');
}
}


