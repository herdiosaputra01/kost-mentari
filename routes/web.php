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

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/beranda', function () {
    return view('data.beranda');
});

Route::get('/tambah', function () {
    return view('data.tambah');
});

Route::get('/pesanan', function () {
    return view('data.pesanan');
});
