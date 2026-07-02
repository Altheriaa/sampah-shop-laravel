<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cetak/nasabah', function () {
    $nasabah = \App\Models\Anggota::all();
    return view('cetak.nasabah', compact('nasabah'));
});

Route::get('/cetak/sampah', function () {
    $sampah = \App\Models\Sampah::all();
    return view('cetak.sampah', compact('sampah'));
});

Route::get('/cetak/transaksi', function () {
    $pembelian = \App\Models\Pembelian::all();
    return view('cetak.transaksi', compact('pembelian'));
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
