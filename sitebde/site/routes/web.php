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

Route::get('/', 'PagesController@accueil');

Route::get('/boutique', 'PagesController@boutique');

Route::get('/a_propos', 'PagesController@a_propos');

Route::get('/connexion', 'PagesController@connexion');

Route::get('/contact', 'PagesController@contact');

Route::get('/home', 'PagesController@home')->name('home');

Route::get('/getRequest', function(){
    if(\Illuminate\Http\Request::ajax()){
        return 'getRequest has loaded completely.';
    }
});

Route::post('/register', function (){
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});


Auth::routes();
