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
Route::get('/read', function () {
    return view('read-mail');
});
Route::get('/profilerecru', function () {
    return view('profilerecru');
});
Route::get('/publier_offres', function () {
    return view('publieroffre');
});
Route::get('/post-jobs', function () {
    return view('post-jobs');
});

Route::get('/profilerecruteur', function () {
    return view('user-dash-recru');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
