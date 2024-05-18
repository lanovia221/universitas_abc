<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\NilaiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// routes/web.php
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/create', [MataKuliahController::class, 'create'])->name('create.matakuliah');
Route::POST('/create', [MataKuliahController::class, 'create'])->name('create.matakuliah');


// Route::resource('mata-kuliahs', MataKuliahController::class);

// Route::get('/dosen.create', [MataKuliahController::class, 'dosen.create'])->name('create.dosen');


Route::resource('dosens', DosenController::class);
Route::resource('mata-kuliahs', MataKuliahController::class);
Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('pendaftarans', PendaftaranController::class);
Route::resource('nilais', NilaiController::class);


// Route::resource('dosens', DosenController::class);
// Route::resource('mata-kuliahs', MataKuliahController::class);
// Route::resource('mahasiswas', MahasiswaController::class);
// Route::resource('pendaftarans', PendaftaranController::class);
// Route::resource('nilais', NilaiController::class);
