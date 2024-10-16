<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.home');
});

Route::get('/home', function () {
    return view('frontend.home');
});

