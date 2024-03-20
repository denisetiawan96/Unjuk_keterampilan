<?php

use App\Http\Controllers\postingancontroller;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\UploadController;
use App\Models\kategori;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('angka/{nilai}', function ($nilai) {
    return "nilai nya = $nilai";
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return $nilai1 + $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return $nilai1 - $nilai2;
});
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/logout', function () {
    return view('home');
});
Route::get('/rincian', function () {
    return view('rincian');
});
Route::get('template', function () {
    return view('template');
});

Route::get('angka/{nilai}', function ($nilai) {
    return "nilai nya = $nilai";
});


// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambah', [SiswaController::class, 'create']);
// Route::get('tambah', [SiswaController::class, 'create']);
// Route::get('tambah', [SiswaController::class, 'create']);

Route::resource('barang', barangcontroller::class)->middleware(['auth','admin']);
Route::resource('postingan', postingancontroller::class)->middleware(['auth','admin']);
Route::resource('kategori', kategoricontroller::class)->middleware(['auth','admin']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
