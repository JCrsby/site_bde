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

Route::get('/boutique', 'BoutiqueController@boutique');

Route::get('/evenements', 'PagesController@evenements');

Route::get('/info', 'PagesController@info');

Route::get('/connexion', 'PagesController@connexion');

Route::get('/contact', 'PagesController@contact');
//Route Requete ajax


Route::get('/inscription','PagesController@inscription');


Route::get('/conditions','PagesController@conditions');

Route::get('/politique','PagesController@politique');

Route::get('/accueil','PagesController@accueil');

Route::get('/cart', 'PagesController@car');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
