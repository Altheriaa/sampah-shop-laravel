<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/product', function () {
    return view('product');
});
