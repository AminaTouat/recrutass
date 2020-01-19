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
    return view('candidat.cv');
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
Route::get('/condidatss',function()
{
$user = DB::table('users')->get();
return view('recruteur/affichecondidat');
});
Auth::routes();



Route::get('/login/recruteur', 'Auth\LoginController@showRecruteurLoginForm');
Route::get('/login', 'Auth\LoginController@showCandidatLoginForm')->name('login');
Route::get('/register/recruteur', 'Auth\RegisterController@showRecruteurRegisterForm');
Route::get('/recruteur', 'RecruteurController@index');
Route::get('/home', 'CandidatController@index');
Route::get('/contact', 'CandidatController@contact');
Route::get('/cv', 'FormationController@index');
Route::get('/edit/{id}','CandidatController@edit');
// Route::get('/editFormation/{id}','FormationController@edit');
Route::get('/edit/{id}','RecruteurController@edit');

Route::get('/offres/create','OffreController@create')->name('offres.create');
Route::post('/offres','OffreController@store')->name('offres.store');
Route::get('/offres/index','OffreController@index')->name('recruteur.indexo');
Route::get('/offres/edit/{id}','OffreController@edit')->name('recruteur.edito');
//Route::post('/offres/edit/{id}', 'OffreController@update');
// Route::post('/editFormation/{id}','FormationController@update');
Route::post('/register', 'Auth\RegisterController@createCandidat')->name('register2');
Route::post('/login/recruteur', 'Auth\LoginController@recruteurLogin');
Route::post('/register/recruteur', 'Auth\RegisterController@createRecruteur');
Route::post('/home/form1', 'CandidatController@store')->name('updateC');
Route::post('/home/form/{id}', 'CandidatController@update')->name('edit');
Route::post('/cv/formation/add', 'FormationController@store')->name('updateF');
Route::post('/cv/competence/add', 'CompetenceContrroller@store')->name('');
Route::post('/cv/formation', 'CvController@store')->name('updateFF');
Route::post('/home/form2', 'CandidatController@update_avatar')->name('updateM');


Route::post('/recruteur/formr', 'RecruteurController@store')->name('updateR');
Route::post('/recruteur/formr/{id}', 'RecruteurController@update')->name('edit1');
Route::post('/recruteur/formr1', 'RecruteurController@update_avatar')->name('updateMm');

Route::resource('offres','OffreController');
// Route::resource('/candidats','CandidatController');