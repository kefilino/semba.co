<?php

use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PermintaanController;
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

Route::get('/', function () {
    return view('home');
})->middleware('guest');

Route::get('/about', function () {
    return view('about');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/permintaan', PermintaanController::class)->name('index', 'permintaan');
    Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');
    Route::resource('/bantuan', BantuanController::class)->name('index', 'bantuan');
    Route::resource('/berita', BeritaController::class)->name('index', 'berita');
});

Route::middleware(['auth:sanctum', 'verified', 'is_admin'])->group(function () {
    //
});