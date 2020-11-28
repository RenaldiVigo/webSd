<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websdcontroller extends Controller
{
    // tabel siswa
    public function kelas1(){

    	return view('siswa.kelas1');
    }
    public function kelas2(){

    	return view('siswa.kelas2');
    }
    public function kelas3(){

    	return view('siswa.kelas3');
    }
    public function kelas4(){

    	return view('siswa.kelas4');
    }
    public function kelas5(){

    	return view('siswa.kelas5');
    }
    public function kelas6(){

    	return view('siswa.kelas6');
    }

    // tabel guru
    public function tabelguru1(){

    	return view('guru.tabelguru1');
    }
    public function tabelguru2(){

    	return view('guru.tabelguru2');
    }
    public function tabelguru3(){

    	return view('guru.tabelguru3');
    }
    public function tabelguru4(){

    	return view('guru.tabelguru4');
    }
    public function tabelguru5(){

    	return view('guru.tabelguru5');
    }
    public function tabelguru6(){

    	return view('guru.tabelguru6');
    }
    public function tabelguru7(){

    	return view('guru.tabelguru7');
    }
    public function tabelguru8(){

    	return view('guru.tabelguru8');
    }
    
    // sambutan
    public function sambutan(){

    	return view('sambutan.sambutan');
    }
    public function visimisi(){
    // (namafolder.kelasnya)
    	return view('sambutan.visimisi');
    }
    public function fotokegiatan(){
        // (namafolder.kelasnya)
            return view('galeri.fotokegiatan');
    }
    public function berita(){
        // (namafolder.kelasnya)
            return view('galeri.berita');
    }
    public function guruall(){
        // (namafolder.kelasnya)
            return view('sambutan.guruall');
    }
}

