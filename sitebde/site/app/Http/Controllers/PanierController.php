<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PanierController extends Controller
{

    //METHODS CALLED FOR ROAD BOUTIQUE
    public function panier()
    {

        //GENERATE GUZZLE HHTP REQUEST

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        $response = $client->request('POST', '/api/command/addToBascket');
        $cart = json_decode($response->getBody()->getContents())->value;

        return view('panier', compact('cart'));
    }

}
