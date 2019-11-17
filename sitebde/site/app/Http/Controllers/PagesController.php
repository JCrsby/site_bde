<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\NavController;

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

    //CONTROLLER COOKIE
    public function evenements()
    {
        if (isset($_COOKIE['token'])) {
            if (strlen($_COOKIE['token']) >= 0) {
                if(NavController::getUser()->value->id_ROLE == 1) {
                    return view('/evenements');
                }return redirect('/index');
            }return redirect('/index');
        }
        return redirect('/index');
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

    //CONTROLLER COOKIE
    public function utilisateur()
    {
        if (isset($_COOKIE['token'])) {
            if (strlen($_COOKIE['token']) >= 0) {
                if(NavController::getUser()->value->id_ROLE == 1) {
                    return view('/utilisateur');
                }return redirect('/index');
            }return redirect('/index');
        }
        return redirect('/index');
    }

    //CONTROLLER COOKIE
    public function produits()
    {
        if (isset($_COOKIE['token'])) {
            if (strlen($_COOKIE['token']) >= 0) {
                if(NavController::getUser()->value->id_ROLE == 1) {
                    return view('/produits');
                }return redirect('/index');
            }return redirect('/index');
        }
        return redirect('/index');
    }

    public function events()
    {
        return view('evenements');
    }


}
