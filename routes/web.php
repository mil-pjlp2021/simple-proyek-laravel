<?php

use App\Http\Controllers\KlienController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TipePekerjaanController;
use App\Http\Controllers\UserController;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
        Route::get('/', function () { return view('dashboard'); })->name('dashboard');
        Route::get('/user', [UserController::class,'index'])->name('users.index');
        Route::get('/user/show/{id}', [UserController::class,'show'])->name('users.show');
        Route::get('/user/create', [UserController::class,'create'])->name('users.create');
        Route::post('/user/create', [UserController::class,'store'])->name('users.store');
        Route::get('/user/edit/{id}', [UserController::class,'edit'])->name('users.edit');
        Route::put('/user/edit/{id}', [UserController::class,'update'])->name('users.update');
        Route::delete('/user/{id}', [UserController::class,'destroy'])->name('users.destroy');

        Route::get('/klien', [KlienController::class,'index'])->name('klien.index');
        Route::get('/klien/show/{id}', [KlienController::class,'show'])->name('klien.show');
        Route::get('/klien/create', [KlienController::class,'create'])->name('klien.create');
        Route::post('/klien/create', [KlienController::class,'store'])->name('klien.store');
        Route::get('/klien/edit/{id}', [KlienController::class,'edit'])->name('klien.edit');
        Route::put('/klien/edit/{id}', [KlienController::class,'update'])->name('klien.update');
        Route::delete('/klien/{id}', [KlienController::class,'destroy'])->name('klien.destroy');

        Route::get('tipe_pekerjaan', [TipePekerjaanController::class,'index'])->name('tipe_pekerjaan.index');
        Route::get('tipe_pekerjaan/show/{id}', [TipePekerjaanController::class,'show'])->name('tipe_pekerjaan.show');
        Route::get('tipe_pekerjaan/create', [TipePekerjaanController::class,'create'])->name('tipe_pekerjaan.create');
        Route::post('tipe_pekerjaan/create', [TipePekerjaanController::class,'store'])->name('tipe_pekerjaan.store');
        Route::get('tipe_pekerjaan/edit/{id}', [TipePekerjaanController::class,'edit'])->name('tipe_pekerjaan.edit');
        Route::put('tipe_pekerjaan/edit/{id}', [TipePekerjaanController::class,'update'])->name('tipe_pekerjaan.update');
        Route::delete('tipe_pekerjaan/{id}', [TipePekerjaanController::class,'destroy'])->name('tipe_pekerjaan.destroy');

        Route::get('pekerjaan', [PekerjaanController::class,'index'])->name('pekerjaan.index');
        Route::get('pekerjaan/show/{id}', [PekerjaanController::class,'show'])->name('pekerjaan.show');
        Route::get('pekerjaan/create', [PekerjaanController::class,'create'])->name('pekerjaan.create');
        Route::post('pekerjaan/create', [PekerjaanController::class,'store'])->name('pekerjaan.store');
        Route::get('pekerjaan/edit/{id}', [PekerjaanController::class,'edit'])->name('pekerjaan.edit');
        Route::put('pekerjaan/edit/{id}', [PekerjaanController::class,'update'])->name('pekerjaan.update');
        Route::delete('pekerjaan/{id}', [PekerjaanController::class,'destroy'])->name('pekerjaan.destroy');

        Route::get('proyek', [ProyekController::class,'index'])->name('proyek.index');
        Route::get('proyek/show/{id}', [ProyekController::class,'show'])->name('proyek.show');
        Route::get('proyek/create', [ProyekController::class,'create'])->name('proyek.create');
        Route::post('proyek/create', [ProyekController::class,'store'])->name('proyek.store');
        Route::get('proyek/edit/{id}', [ProyekController::class,'edit'])->name('proyek.edit');
        Route::put('proyek/edit/{id}', [ProyekController::class,'update'])->name('proyek.update');
        Route::delete('proyek/{id}', [ProyekController::class,'destroy'])->name('proyek.destroy');
});
