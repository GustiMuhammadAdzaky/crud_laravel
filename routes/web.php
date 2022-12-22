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

// Baca ini !
Route::get('/', function () {
    // mereturn view dari folder resouce/views/welcome.blade.php
    return view('welcome');
});


Route::get('/about', function () {
    // Pashing data bisa pakai []
    return view('about', [
        "nama" => "zaky"
    ]);
});
