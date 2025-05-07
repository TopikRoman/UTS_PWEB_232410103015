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
// route buat dashboard
Route::get('/', [\App\Http\Controllers\PageController::class, 'tampilkanDashboard'])->name('dashboard.tampil');

// route buat login/logout
Route::get('/login', [\App\Http\Controllers\PageController::class, 'tampilkanLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\PageController::class, 'loginSubmit'])->name('login.Submit');
Route::get('/logout', [\App\Http\Controllers\PageController::class, 'logoutSubmit'])->name('logout.Submit');

// route profile
Route::get('/profile', [\App\Http\Controllers\PageController::class, 'tampilkanProfile'])->name('profile.tampil');

// route buat manajemen data zakat
Route::get('/pengelolaan', [\App\Http\Controllers\PageController::class, 'tampilkanData'])->name('data.tampil');
Route::post('/hapus', [\App\Http\Controllers\PageController::class, 'hapusData'])->name('data.hapus');
Route::post('/tambah', [\App\Http\Controllers\PageController::class, 'tambahData'])->name('data.tambah');
