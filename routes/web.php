<?php

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
    return view('welcome');
});

Route::get('/usuario', function () {
    return view('user');
});

Route::get('/Reportes', function () {
    return view('Reportes');
});


Route::get('/Rankings', function () {
    return view('Rankings');
});



