<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{





    public function cookiesPopup()
    {
        Session::put('cookiesPopup', 1);
        return redirect('/');
    }

    public function info()
    {

        return view('info');
    }

//    public function boutique()
//    {
//
//        return view('boutique');
//    }

    public function connexion()
    {

        return view('connexion');
    }

    public function contact()
    {

        return view('contact');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function evenements()
    {
        return view('evenements');
    }


    public function conditions()
    {
        return view('politique');
    }

    public function politique()
    {
        return view('politique');
    }

    public function accueil()
    {
        return view('accueil');
    }
    public function utilisateur()
    {
        return view('utilisateur');
    }

    public function produits(){

        return view('produits');
    }

    public function events(){

        return view('evenements');
    }


}
