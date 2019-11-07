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

Route::get('/', 'PagesController@accueil');

Route::get('/boutique', 'PagesController@boutique');

Route::get('/a_propos', 'PagesController@a_propos');

Route::get('/connexion', 'PagesController@connexion');

Route::get('/contact', 'PagesController@contact');




