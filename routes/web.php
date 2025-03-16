<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('layout.beranda');
});

Route::get('/tambah', function () {
    return view('layout.tambah');
});

Route::get('/pesanan', function () {
    return view('layout.pesanan');
});
