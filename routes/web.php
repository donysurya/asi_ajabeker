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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/visi_misi', function () {
    return view('visi_misi');
});

Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/anjab_abk', function () {
    return view('anjab_abk');
});

Route::get('/bacaan', function () {
    return view('bacaan');
});

Route::get('/berita', function () {
    return view('berita');
});