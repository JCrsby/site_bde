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

//BOUTIQUE
Route::get('/index', 'EventController@index');
Route::get('/', 'EventController@index');
Route::get('/boutique', 'BoutiqueController@allProducts');

//INFORMATION WEBSITE
Route::get('/info', 'PagesController@info');
Route::get('/contact', 'PagesController@contact');
Route::get('/conditions','PagesController@conditions');
Route::get('/politique','PagesController@politique');

//VENTE
Route::get('/cart', 'PanierController@view');

//EVENEMENTS
Route::get('/events','EventListController@events');
Route::post('/inscriptionevent','EventController@inscriptionEvent');

//INSCRIPTION
Route::get('/inscription','InscriptionController@view');
Route::post('/inscription', 'InscriptionController@inscription');

//INSCRIPTION ERROR MESSAGE
//Route::post('/inscription', function () {
//    request()->validate([
//        'email' => ['required', 'email'],
//        'password' => ['required', 'confirmed', 'min:8'],
//        'password_confirmation' => ['required'],
//    ], [
//        'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
//    ]);
//});

//CONNECTION
Route::post('/connexion','ConnexionController@formConnexion');
Route::get('/connexion', 'ConnexionController@connection');

//DISCONNECTION
Route::get('/disconect', 'ConnexionController@deconnxion');

//ADMINISTATOR
Route::get('/utilisateur','PagesController@utilisateur');
Route::get('/produits','PagesController@produits');
Route::get('/evenements','PagesController@evenements');

//COOKIE
Route::post('cookiesPopup', 'PagesController@cookiesPopup')->name('cookiesPopup');

Auth::routes();

//TEST
//Route::get('/cart', 'PagesController@cart');
//Route::get('/accueil','PagesController@accueil');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/test', 'NavController@getUser');