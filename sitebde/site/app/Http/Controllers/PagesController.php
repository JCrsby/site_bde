<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function accueil(){

    	return view('accueil');
    }

     public function boutique(){

    	return view('boutique');
    }

     public function a_propos(){

    	return view('a_propos');
    }

      public function connexion(){

    	return view('connexion');
    }

     public function contact(){

    	return view('contact');
    }

    public function home(){

        return view('home');
    }



}
