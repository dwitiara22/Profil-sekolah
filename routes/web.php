<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Timja\BengkelController;
use App\Http\Controllers\Timja\HatcheryController;
use App\Http\Controllers\Timja\HumasController;
use App\Http\Controllers\Timja\KepegawaianController;
use App\Http\Controllers\Timja\KesiswaanController;
use App\Http\Controllers\Timja\KeuanganController;
use App\Http\Controllers\Timja\PengajaranController;
use App\Http\Controllers\Timja\PengolahanController;
use App\Http\Controllers\Timja\PerpustakaanController;
use App\Http\Controllers\Timja\RtpController;
use App\Http\Controllers\Timja\TambakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proka\apatController;
use App\Http\Controllers\proka\aphpiController;
use App\Http\Controllers\proka\KepalaProkaController;
use App\Http\Controllers\ProkaController;


Route::get('/', function () {
    return view('pages.home', ['title' => 'Home']);
});
Route::middleware('guest')->group(function () {
    // Menampilkan Halaman Login
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

    // Proses Submit Login
    Route::post('login', [LoginController::class, 'login']);
});

// --- AUTH ROUTES (Hanya bisa diakses setelah login) ---
Route::middleware('auth')->group(function () {
    // Proses Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('timja')->name('timja.')->group(function () {
    $controllers = [
        'kepegawaian' => KepegawaianController::class,
        'humas' => HumasController::class,
        'keuangan' => KeuanganController::class,
        'rtp' => RtpController::class,
        'perpustakaan' => PerpustakaanController::class,
        'pengajaran' => PengajaranController::class,
        'kesiswaan' => KesiswaanController::class,
        'bengkel' => BengkelController::class,
        'hatchery' => HatcheryController::class,
        'pengolahan' => PengolahanController::class,
        'tambak' => TambakController::class,
    ];

    foreach ($controllers as $uri => $controller) {
        Route::resource($uri, $controller)->only(['index', 'show']);
    }
});

// 2. ROUTE UNTUK ADMIN (Wajib Login)
// Hanya untuk proses Create, Store, Edit, Update, dan Delete
Route::middleware(['auth'])->prefix('timja')->name('timja.')->group(function () {
    $controllers = [
        'kepegawaian' => KepegawaianController::class,
        'humas' => HumasController::class,
        'keuangan' => KeuanganController::class,
        'rtp' => RtpController::class,
        'perpustakaan' => PerpustakaanController::class,
        'pengajaran' => PengajaranController::class,
        'kesiswaan' => KesiswaanController::class,
        'bengkel' => BengkelController::class,
        'hatchery' => HatcheryController::class,
        'pengolahan' => PengolahanController::class,
        'tambak' => TambakController::class,
    ];

    foreach ($controllers as $uri => $controller) {
        Route::resource($uri, $controller)->except(['index', 'show']);
    }
});

// 3. Proka
// ==================== HALAMAN PROKA UTAMA ====================
Route::get('/proka/{slug}', [KepalaProkaController::class, 'index'])->name('proka');


// ==================== AKSI TOMBOL GURU ====================
Route::get('/guru/tambah/{proka}', [KepalaProkaController::class, 'createGuru'])->name('guru.create');
Route::post('/guru/simpan', [KepalaProkaController::class, 'storeGuru'])->name('guru.store');
Route::get('/guru/{id}/edit', [KepalaProkaController::class, 'editGuru'])->name('guru.edit');
Route::put('/guru/{id}/update', [KepalaProkaController::class, 'updateGuru'])->name('guru.update');
Route::delete('/guru/{id}', [KepalaProkaController::class, 'destroyGuru'])->name('guru.destroy');


// ==================== AKSI TOMBOL SISWA/I ====================
Route::get('/siswa/tambah/{proka}', [KepalaProkaController::class, 'createSiswa'])->name('siswa.create');
Route::post('/siswa/simpan', [KepalaProkaController::class, 'storeSiswa'])->name('siswa.store');
Route::get('/siswa/{id}/edit', [KepalaProkaController::class, 'editSiswa'])->name('siswa.edit');
Route::put('/siswa/{id}/update', [KepalaProkaController::class, 'updateSiswa'])->name('siswa.update');
Route::delete('/siswa/{id}', [KepalaProkaController::class, 'destroySiswa'])->name('siswa.destroy');

