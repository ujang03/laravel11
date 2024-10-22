<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/data-warga', function () {
    return view('admin.data_warga.index');
});
