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
    return view('index');
});
Route::get('/offres', function () {
    return view('offres');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/read', function () {
    return view('read-mail');
});

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('profile');
