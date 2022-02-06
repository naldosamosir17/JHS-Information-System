<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataIndukController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AksesController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Delete;
use App\Http\Controllers\Kontroller;


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
    return view('layout.login');
});

Route::get('/data_induk', [DataIndukController::class, 'index'])->name('data_induk');
Route::get('/game', [GameController::class, 'index'])->name('game');
Route::get('/data', [GameController::class, 'data'])->name('data');
Route::get('/home', [GameController::class, 'home'])->name('home');
Route::get('/v_home', [GameController::class, 'home'])->name('home');
Route::get('/pembelajaran', [GameController::class, 'pembelajaran'])->name('pembelajaran');
Route::get('/jadwal', [GameController::class, 'jadwal'])->name('jadwal');
Route::get('/pengumuman', [GameController::class, 'pengumuman'])->name('pengumuman');
Route::get('/grafik', [GameController::class, 'grafik'])->name('grafik');
Route::get('/v_kontrol', [GameController::class, 'v_kontrol'])->name('v_kontrol');

Route::get('/ppkn', [GameController::class, 'ppkn'])->name('ppkn');
Route::get('/ppknop', [GameController::class, 'ppknop'])->name('ppknop');

Route::get('/add_materi', [GuruController::class, 'tambah'])->name('add_materi');
Route::get('/edit_materi/{id}', [GuruController::class, 'editMateri'])->name('edit_materi');
Route::get('/editUndangan/{id}', [Kontroller::class, 'editUndangan'])->name('editUndangan');

Route::post('/simpanEdit', [GuruController::class, 'simpanEdit'])->name('simpanEdit');
Route::post('/simpanUndangan', [Kontroller::class, 'simpanUndangan'])->name('simpanUndangan');

// Route::get('/v_home', function () {
//     return view('v_home');
// });

Route::get('/dashboard', function () {
    return view('guru.home');
});
Route::get('/homeAdmin', [LoginController::class, 'homeAdmin'])->name('homeAdmin');


Route::get('/Materi', [MateriController::class, 'index']);

Route::get('/guru.controller_kls7',[AksesController::class, 'index'])->name('akses');
Route::get('/guru.kontrol_siswa',[Kontroller::class, 'tampil'])->name('undangan');
Route::get('/v_ppkn_op',[AksesController::class, 'materi_siswa'])->name('ppkn');

Route::get('/guru.tambah_pengumuman',[GuruController::class, 'tambah_pengumuman'])->name('pengumuman');


Route::get('/Materi/tambah','MateriController@tambah');
Route::post('/Materi/store','MateriController@store');
Route::post('/Kontrol/Kelas','Kontroller@Kelas');
Route::resource('pembelajarans', PembelajaranController::class);
Route::resource('Kelas', Kontroller::class);

Route::get('/guru.tampil', [PembelajaranController::class, 'show'])->name('tampil');

Route::post('/loginprocess', [LoginController::class, 'loginprocess']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/deleteMateri/{id}', [Delete::class, 'deleteMateri']);
Route::get('/deleteUndangan/{id}', [Delete::class, 'deleteUndangan']);


