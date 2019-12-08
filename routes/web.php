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
Route::get('/modifier_motdepass', function () {
    return view('changer_pswd');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/offres_publier', function () {
    return view('offres_pub');
});
Route::get('/favorite_condidat', function () {
    return view('favorite-cond');
});
Route::get('/condidats post leur cv', function () {
    return view('condidat_post');
});
Route::get('/Liste des offres', function () {
    return view('offres');
});


Route::get('/Liste des entreprises', function () {
    return view('listeDesEntreprises');
});
Route::get('/Les offres dune entreprises', function () {
    return view('offresEntreprises');
});
Route::get('/Information sur lentreprise', function () {
    return view('informationSurlEntreprise');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/recruteur', 'Auth\LoginController@showRecruteurLoginForm');
Route::get('/register/recruteur', 'Auth\RegisterController@showRecruteurRegisterForm');
Route::post('/login/recruteur', 'Auth\LoginController@recruteurLogin');
Route::post('/register/recruteur', 'Auth\RegisterController@createRecruteur');
// Route::view('/home', 'home')->middleware('auth');
Route::view('/recruteur', 'recruteur');