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
    return view('welcome');
});

// tabel siswa
Route::get('kelas1', 'websdcontroller@kelas1');
Route::get('kelas2', 'websdcontroller@kelas2');
Route::get('kelas3', 'websdcontroller@kelas3');
Route::get('kelas4', 'websdcontroller@kelas4');
Route::get('kelas5', 'websdcontroller@kelas5');
Route::get('kelas6', 'websdcontroller@kelas6');
//  tabel guru
Route::get('tabelguru1', 'websdcontroller@tabelguru1');
Route::get('tabelguru2', 'websdcontroller@tabelguru2');
Route::get('tabelguru3', 'websdcontroller@tabelguru3');
Route::get('tabelguru4', 'websdcontroller@tabelguru4');
Route::get('tabelguru5', 'websdcontroller@tabelguru5');
Route::get('tabelguru6', 'websdcontroller@tabelguru6');
Route::get('tabelguru5', 'websdcontroller@tabelguru7');
Route::get('tabelguru6', 'websdcontroller@tabelguru8');

// sambutan
Route::get('sambutan', 'websdcontroller@sambutan');
Route::get('visimisi', 'websdcontroller@visimisi');
Route::get('guruall', 'websdcontroller@guruall');

// Foto Kegiatan
Route::get('fotokegiatan', 'websdcontroller@fotokegiatan');

// Foto Berita
Route::get('berita', 'websdcontroller@berita');