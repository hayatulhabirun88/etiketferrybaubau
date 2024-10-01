<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginApiController;
use App\Http\Controllers\Api\QrCodeApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('login', [LoginApiController::class, 'login']);
Route::middleware(['auth:sanctum', 'custom_auth'])->group(function () {
    Route::post('logout', [LoginApiController::class, 'logout']);
    Route::post('qrcode', [QrCodeApiController::class, 'scan']);
    // Rute lainnya yang memerlukan autentikasi...
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
