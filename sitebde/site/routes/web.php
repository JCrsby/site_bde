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

Route::get('/index', 'EventController@index');

Route::get('/', 'EventController@index');


Route::get('/', 'EventController@index');

Route::get('/boutique', 'BoutiqueController@allProducts');

Route::get('/evenements', 'PagesController@evenements');

Route::get('/info', 'PagesController@info');

Route::get('/connexion', 'ConnexionController@connection');

Route::get('/contact', 'PagesController@contact');
//Route Requete ajax



Route::get('/conditions','PagesController@conditions');

Route::get('/politique','PagesController@politique');

Route::get('/accueil','PagesController@accueil');


Route::get('/cart', 'PanierController@view');
//Route::get('/cart', 'PagesController@cart');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/connexion','ConnexionController@formConnexion');

Route::post('/inscriptionevent','EventController@inscriptionEvent');

//Page des événements
Route::get('/events','EventListController@events');


Auth::routes();

//INSCRIPTION
Route::post('/inscription', 'InscriptionController@inscription');
Route::get('/inscription','InscriptionController@view');

//DISCONNECTION
Route::get('/disconect', 'ConnexionController@deconnxion');



Route::get('/test', 'NavController@getUser');

Route::get('/utilisateur','PagesController@utilisateur');

Route::get('/produits','PagesController@produits');

Route::get('/evenements','PagesController@evenements');

