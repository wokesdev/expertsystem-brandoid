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
Route::redirect('/', 'cek-rabun-jauh', 301);
Route::view('cek-rabun-jauh', 'rabun-jauh.index');
Route::resource('check', 'CheckController');
