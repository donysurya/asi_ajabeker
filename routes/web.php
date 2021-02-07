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
    return view('landing_page.index');
});

Route::get('/login', function () {
    return view('landing_page.login');
});

Route::get('/contact_us', function () {
    return view('landing_page.contact_us');
});

Route::get('/faq', function () {
    return view('landing_page.faq');
});

Route::get('/visi_misi', function () {
    return view('landing_page.visi_misi');
});

Route::get('/struktur_organisasi', function () {
    return view('landing_page.struktur_organisasi');
});

Route::get('/tentang', function () {
    return view('landing_page.tentang');
});

Route::get('/anjab_abk', function () {
    return view('landing_page.anjab_abk');
});

Route::get('/bacaan', function () {
    return view('landing_page.bacaan');
});

Route::get('/berita', function () {
    return view('landing_page.berita');
});