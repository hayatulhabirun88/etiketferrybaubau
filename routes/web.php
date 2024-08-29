<?php

use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\KeberangkatanController;

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



Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('kapal', [KapalController::class, 'index'])->name('kapal');
Route::get('harga', [HargaController::class, 'index'])->name('harga');
Route::get('keberangkatan', [KeberangkatanController::class, 'index'])->name('keberangkatan');
Route::get('history', [HistoriController::class, 'index'])->name('history');
Route::get('penumpang', [PenumpangController::class, 'index'])->name('penumpang');
Route::get('tiket', [TiketController::class, 'index'])->name('tiket');
Route::get('tiket/pesan_tiket', [TiketController::class, 'pesan_tiket'])->name('tiket.pesan_tiket');
Route::get('tiket/list', [TiketController::class, 'list'])->name('tiket.list');
Route::get('tiket/{id}/cetak', [TiketController::class, 'cetak'])->name('tiket.list.cetak');