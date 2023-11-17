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

Route::get('/home', function () {
    return view('pertemuan 4/home');
});
Route::get('/profile', function () {
    return view('pertemuan 4/profile');
});
Route::get('/mahasiswa', function () {
    return view('pertemuan 4/mahasiswa');
});
Route::get('/about', function () {
    return view('pertemuan 4/about');
});