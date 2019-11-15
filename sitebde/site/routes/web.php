<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great

*/
Route::post('cookiesPopup', 'PagesController@cookiesPopup')->name('cookiesPopup');

<<<<<<< HEAD
Route::get('/index', 'EventController@index');
=======
Route::get('/index', 'PagesController@index');

Route::get('/', 'PagesController@index');
>>>>>>> basket

Route::get('/', 'EventController@index');

Route::get('/boutique', 'BoutiqueController@allProducts');

Route::get('/evenements', 'PagesController@evenements');

Route::get('/info', 'PagesController@info');

Route::get('/connexion', 'ConnexionController@connection');

Route::get('/contact', 'PagesController@contact');
//Route Requete ajax


<<<<<<< HEAD
=======
Route::get('/inscription','PagesController@inscription');
>>>>>>> basket

Route::get('/conditions','PagesController@conditions');

Route::get('/politique','PagesController@politique');

Route::get('/accueil','PagesController@accueil');

<<<<<<< HEAD
Route::get('/panier', 'PanierController@panier');
=======
Route::get('/cart', 'PagesController@cart');
>>>>>>> basket

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/connexion','ConnexionController@formConnexion');



Auth::routes();


//INSCRIPTION
Route::post('/inscription', 'InscriptionController@inscription');
Route::get('/inscription','InscriptionController@view');

