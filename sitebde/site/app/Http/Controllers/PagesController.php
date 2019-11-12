<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){

    	return view('index');
    }

     public function boutique(){

    	return view('boutique');
    }

     public function info(){

    	return view('info');
    }

      public function connexion(){

    	return view('connexion');
    }

     public function contact(){

    	return view('contact');
    }

    







}
