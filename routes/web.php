<?php

use App\Http\Controllers\Berita;
use App\Http\Controllers\DataWarga;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('/home', function () {
    return view('frontend.home');
});
// route untuk data warga
Route::get('/data-warga', [DataWarga::class, 'index'])->name('data-warga.index');
Route::post('/data-warga', [DataWarga::class, 'store'])->name('data-warga.store');
Route::get('/data-warga/{id}', [DataWarga::class, 'edit'])->name('data-warga.edit');

//Route untuk agenda gang
Route::get('/agenda-gang', [Berita::class, 'index'])->name('news.index');
Route::post('/news', [Berita::class, 'store'])->name('news.store');

//Route untuk accounting
Route::get('/accounting', function () {
    return view('admin.accounting.index');
});
