<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', 'PagesController@home');
Route::get('/login', 'PagesController@login');
Route::get('/contact_us', 'PagesController@contact');
Route::get('/faq', 'PagesController@faq');
Route::get('/visi_misi', 'PagesController@visimisi');
Route::get('/struktur_organisasi', 'PagesController@struktur');
Route::get('/tentang', 'PagesController@tentang');
Route::get('/anjab_abk', 'PagesController@anjab_abk');
Route::get('/bacaan', 'PagesController@bacaan');
Route::get('/berita', 'PagesController@berita');