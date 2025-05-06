<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'tampilkanDashboard'])->name('dashboard.tampil');
Route::get('/login', [\App\Http\Controllers\PageController::class, 'tampilkanLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\PageController::class, 'loginSubmit'])->name('login.Submit');
Route::get('/logout', [\App\Http\Controllers\PageController::class, 'logoutSubmit'])->name('logout.Submit');
Route::get('/profile', [\App\Http\Controllers\PageController::class, 'tampilkanProfile'])->name('profile.tampil');
Route::get('/pengelolaan', [\App\Http\Controllers\PageController::class, 'tampilkanData'])->name('data.tampil');
Route::post('/hapus', [\App\Http\Controllers\PageController::class, 'hapusData'])->name('data.hapus');
