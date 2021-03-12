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
Route::view('/', 'welcome');
Route::view('cek-rabun-jauh', 'rabun-jauh.index');
Route::view('cek-rabun-dekat', 'rabun-dekat.index');
Route::view('cek-rabun-senja', 'rabun-senja.index');

Route::post('pilih-penyakit', 'CheckController@Index')->name('check.penyakit');

Route::post('check.rabun-jauh', 'CheckController@CekRabunJauh')->name('check.rabun-jauh');
Route::post('check.rabun-dekat', 'CheckController@CekRabunDekat')->name('check.rabun-dekat');
Route::post('check.rabun-senja', 'CheckController@CekRabunSenja')->name('check.rabun-senja');
