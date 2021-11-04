<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public $paramglobal;
    public function __construct()
    {
        //Auth
        //Log
        $this->paramglobal['title']="Halman Admin Mahasiswa";
    }	 
    public function index(){		
        // return view("welcome");
        //$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo", "Lisa Permata"];		
        //return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
        $arrMahasiswa = $this->paramglobal;
        $arrMahasiswa['list_mahasiswa'] = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo", "Lisa Permata"];		
        return view('kelas')->with($arrMahasiswa);
    }	 
    public function show(){	
        $param = $this->paramglobal;	
        $param['list_mahasiswa'] = array("Andi","Budi","Chandra","Dodi","Erni");
        $param['list_Dosen'] = array("Ayu","Benny");
        return view('mahasiswa',$param);	 
    }
}
