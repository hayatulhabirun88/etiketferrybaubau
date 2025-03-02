<?php

require_once __DIR__ . '../../vendor/autoload.php';

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Mobile\HomeMobileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\KeberangkatanController;
use App\Http\Controllers\Mobile\LoginMobileController;

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



Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/pesan-tiket', [FrontController::class, 'pesan_tiket'])->name('front.pesan_tiket');
Route::get('/tiket-list', [FrontController::class, 'tiket_list'])->name('front.tiket_list');
Route::get('/payment/success', [FrontController::class, 'success'])->name('front.payment_success');
Route::get('/payment/pending', [FrontController::class, 'pending'])->name('front.payment_pending');
Route::get('/front-tiket/{id}/cetak', [FrontController::class, 'cetak'])->name('tiket.list.cetak');
Route::get('email/{id}', [FrontController::class, 'email'])->name('tiket.email');

Route::get('/login', [LoginController::class, 'index'])->name('login');
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


//MOBILE
Route::get('m/login', [LoginMobileController::class, 'index'])->name('mobile.login');
Route::get('m/logout', [LoginMobileController::class, 'logout'])->name('mobile.logout');
Route::get('m/dashboard', [HomeMobileController::class, 'index'])->name('mobile.dashboard');
Route::post('ajax/tiket', [HomeMobileController::class, 'ajax_tiket'])->name('mobile.ajax_tiket');