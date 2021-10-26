<?php

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
// /Navigasi//
require __DIR__.'/auth.php';

Route::view('/', 'home')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/bk', function () {
        return view('bk');
    })->name('bk');

    Route::get('/visi', function () {
        return view('visi');
    })->name('visi');

    Route::get('/organisasi', function () {
        return view('organisasi');
    })->name('organisasi');

    Route::get('/kepsek', function () {
        return view('kepsek');
    })->name('kepsek');

    Route::get('/personal', function () {
        return view('personal');
    })->name('personal');
});