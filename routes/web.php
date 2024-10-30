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
Route::get('/agenda-gang', function () {
    return view('admin.agenda_gang.index');
});
Route::get('/accounting', function () {
    return view('admin.accounting.index');
});
