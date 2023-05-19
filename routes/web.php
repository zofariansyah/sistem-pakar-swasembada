<?php

use App\Http\Controllers\HitungTanamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
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

Route::get('/', [HitungTanamanController::class, 'index']);

Route::post('/hitung-tanaman', [HitungTanamanController::class, 'hitung']);


Route::middleware(['autentikasi'])->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index']);
    Route::post('/ubah-tanaman', [DashboardAdminController::class, 'update']);
    Route::delete('/delete-tanaman/{id}', [DashboardAdminController::class, 'destroy'])->name('delete-tanaman');
    Route::post('/tambah-tanaman', [DashboardAdminController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/masuk', [AuthController::class, 'masuk'])->name('masuk');
    Route::post('/masuk', [AuthController::class, 'masukdashboard']);
});

Route::get('/hasil', function () {
    return view('hasil');
});
