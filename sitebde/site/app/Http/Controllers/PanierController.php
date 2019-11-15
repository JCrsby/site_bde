<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\RequestOptions;

class PanierController extends Controller
{
    public function panier()
    {
        return view('panier');
    }

}
