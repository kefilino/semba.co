<?php

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
    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource('permintaan', PermintaanController::class)->name('index', 'permintaan');
    Route::get('/pengaturan', function () {
        return Inertia\Inertia::render('Pengaturan');
    })->name('pengaturan');
});