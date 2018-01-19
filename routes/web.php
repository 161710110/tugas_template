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
Route::get('/gallery', function () {
    return view('gallery');
});
//Route::get('/', function () {
//    return view('table');
//});
Route::get('/para', function () {
    return view('paragraf');
});
Route::get('/hero', function () {
    return view('hero');
});
Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('siswa','SiswaController@data');
Auth::routes();

Route::get('/gallery', 'HomeController@index');
