<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/mitra', function () {
    return view('mitra');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/statistik', function () {
    return view('statistik');
});

Route::get('/sektor', function () {
    return view('sektor');
});
