<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [BaseController::class, 'index'])->name('dashboard');

    Route::controller(PenyewaController::class)->prefix('penyewa')->name('penyewa')->group(function () {
        Route::get('/', 'index');
        Route::get('/detail', 'detail')->name('.detail');
        Route::get('/create', 'create')->name('.create');
        Route::post('/store', 'store')->name('.store');
        Route::patch('/update/{id}', 'update')->name('.update');
        Route::delete('/destroy/{id}', 'destroy')->name('.destroy');
    });

    Route::controller(PemasukanController::class)->prefix('pemasukan')->name('pemasukan')->group(function () {
        Route::get('/', 'index');
        Route::get('/detail', 'detail')->name('.detail');
        Route::get('/create', 'create')->name('.create');
        Route::post('/store', 'store')->name('.store');
        Route::patch('/update/{id}', 'update')->name('.update');
        Route::delete('/destroy/{id}', 'destroy')->name('.destroy');
    });

    Route::controller(PengeluaranController::class)->prefix('pengeluaran')->name('pengeluaran')->group(function () {
        Route::get('/', 'index');
        Route::get('/detail', 'detail')->name('.detail');
        Route::get('/create', 'create')->name('.create');
        Route::post('/store', 'store')->name('.store');
        Route::patch('/update/{id}', 'update')->name('.update');
        Route::delete('/destroy/{id}', 'destroy')->name('.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
