<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\KesanController;
use App\Http\Controllers\PesanSiswaController;
use App\Http\Controllers\PesanUmumController;


Route::get('/', function () {
    return view('landing');
});

Route::get('/surat', function() {
    return view('surat.index');
})->name('surat.index');


Route::get('/surat/buka', function() {
    return view('surat.buka');
})->name('surat.buka');



Route::get('/pendataan', [PendataanController::class, 'index'])->name('pendataan');
Route::post('/pendataan', [PendataanController::class, 'store'])->name('pendataan.store');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');

Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');

Route::get('/input-sample', [SiswaController::class, 'storeSample']);

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/{id}', [GaleriController::class, 'show'])->name('galeri.show');
Route::get('/', [LandingController::class, 'landing'])->name('landing');


Route::get('/walikelas', [KesanController::class, 'walikelas'])->name('kesan.walikelas');
Route::post('/walikelas/store', [KesanController::class, 'storeWaliKelas'])->name('kesan.storeWaliKelas');

Route::get('/ketuakelas', [KesanController::class, 'ketuaKelas'])->name('kesan.ketuakelas');
Route::post('/ketuakelas/store', [KesanController::class, 'storeKetuaKelas'])->name('kesan.storeKetuaKelas');


Route::get('/pesan-siswa', [PesanSiswaController::class, 'index'])->name('pesan.siswa');
Route::post('/pesan-siswa', [PesanSiswaController::class, 'store'])->name('pesan.siswa.store');

Route::post('/pesan-siswa-refleksi', [PesanSiswaController::class, 'storeRefleksi'])->name('pesan.siswa.refleksi');

// Untuk melihat pesan yang ditujukan ke siswa
Route::get('/pesan-untuk/{nama}', [PesanSiswaController::class, 'lihatPesanUntuk'])->name('pesan.siswa.lihat');



// Mini login untuk lihat pesan teman
Route::get('/login-pesan/{nama}', [PesanSiswaController::class, 'formLogin'])->name('pesan.login.form');
Route::post('/login-pesan/{nama}', [PesanSiswaController::class, 'loginPesan'])->name('pesan.login.proses');


// Halaman kirim refleksi (form)
Route::get('/refleksi', [PesanSiswaController::class, 'refleksi'])->name('refleksi.index');

// Simpan refleksi
Route::post('/refleksi', [PesanSiswaController::class, 'storeRefleksi'])->name('refleksi.store');

// Login ke halaman pesan ketua/wali
Route::get('/pesan-{untuk}/login', [PesanUmumController::class, 'loginForm'])->name('pesanumum.loginform');
Route::post('/pesan-{untuk}/login', [PesanUmumController::class, 'login'])->name('pesanumum.login');
Route::get('/pesan-{untuk}/lihat', [PesanUmumController::class, 'lihat'])->name('pesanumum.lihat');


