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

use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/',[DosenController::class,'index'])->name('dosen.index');
// Route::get('/dosen/buat',[DosenController::class,'buat'])->name('dosen.create');
// Route::post('/dosen',[DosenController::class,'store'])->name('dosen.store');
// Route::get('/dosen/tampil',[DosenController::class,'index'])->name('dosen.tampil');
// Route::get('/dosen/{dosen}/edit',[DosenController::class,'edit'])->name('dosen.edit');
// Route::get('/dosen/{dosen}/show',[DosenController::class,'show'])->name('dosen.show');

