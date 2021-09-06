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
Route::view('/','home')->name('home');
Route::view('/visi', 'visi')-> name('visi');
Route::view('/organisasi', 'organisasi')-> name('organisasi');


Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

require __DIR__.'/auth.php';
