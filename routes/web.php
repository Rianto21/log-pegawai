<?php

use App\Http\Controllers\LogHarianController;
use App\Http\Controllers\PegawaiController;
use App\Models\LogHarian;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
})->name('home');

Route::get('/about', function () {
  return view('about');
})->name('about');


// AUTH
Route::get('/login', [PegawaiController::class, 'login_view'])->middleware('guest')->name('login');
Route::post('/login', [PegawaiController::class, 'login'])->middleware('guest')->name('login.posts');
Route::post('/logout', [PegawaiController::class, 'logout'])->middleware('signed_pegawai')->name('logout');

// PEGAWAI
Route::get('/profile', [PegawaiController::class, 'profile'])->middleware('signed_pegawai')->name('profile');
Route::get('/daftar-pegawai', [PegawaiController::class, 'index'])->middleware('signed_pegawai')->name('daftar_pegawai');

// LOG HARIAN
Route::get('/log-harian', [LogHarianController::class, 'index'])->middleware('signed_pegawai')->name('log_harian');
Route::get('/log-harian/staff/{id_pegawai}', [LogHarianController::class, 'log_harian_staff'])->middleware('signed_pegawai')->name('log_harian.staff');
Route::get('/log-harian/tambah', [LogHarianController::class, 'create_view'])->middleware('signed_pegawai')->name('log_harian.tambah_view');
Route::get('/log-harian/edit/{id_log_harian}', [LogHarianController::class, 'edit_view'])->middleware('signed_pegawai')->name('log_harian.edit_view');
Route::get('/log-harian/hapus/{id_log_harian}', [LogHarianController::class, 'destroy'])->middleware('signed_pegawai')->name('log_harian.hapus');
Route::post('/log-harian/tambah', [LogHarianController::class, 'create'])->middleware('signed_pegawai')->name('log_harian.tambah_post');
Route::post('/log-harian/edit/{id_log_harian}', [LogHarianController::class, 'edit_log_harian'])->middleware('signed_pegawai')->name('log_harian.edit_post');
Route::post('/log-harian/verifikasi/{id_log_harian}', [LogHarianController::class, 'verifikasi_log_harian'])->middleware('signed_pegawai')->name('log_harian.verifikasi');
