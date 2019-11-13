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

    public function inscription()
    {
        return view('inscription');
    }
/*
    public function edit($id)
    {
        $menus = Menu::find($id);
        dd($menus);
        $menu_id = Menu::lists('title', 'id');
        $selected_type = Menu::lists('title', 'id');
        if(is_null($menus)){
            return Redirect::route('admin.menus.edit');
        }

        return View::make('menus::edit', compact('menus', 'menu_id', 'selected_type'))->with($menu_id, $selected_type);
    }*/

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



}
