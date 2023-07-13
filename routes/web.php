<?php

use App\Http\Controllers\HitungTanamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardRulesController;
use App\Http\Controllers\FuzzyController;
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



Route::post('/hitung-tanaman', [HitungTanamanController::class, 'hitung']);


Route::middleware(['autentikasi'])->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index']);
    Route::get('/rules', [DashboardRulesController::class, 'index']);
    Route::post('/ubah-tanaman', [DashboardAdminController::class, 'update']);
    Route::post('/ubah-rules', [DashboardRulesController::class, 'update']);
    Route::delete('/delete-tanaman/{id}', [DashboardAdminController::class, 'destroy'])->name('delete-tanaman');
    Route::delete('/delete-rules/{id}', [DashboardRulesController::class, 'destroy'])->name('delete-rules');
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

//new fuzzy
Route::get('/', [FuzzyController::class, 'index']);
Route::post('/hitung-fuzzy', [FuzzyController::class, 'hitung']);
