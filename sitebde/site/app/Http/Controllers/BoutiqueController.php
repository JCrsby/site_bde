<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{


    //METHODS CALLED FOR ROAD BOUTIQUE
    public function allProducts()
    {
        //GENERATE GUZZLE HHTP REQUEST

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        try {
            $response = $client->request('POST', '/api/product/all');
            $products = json_decode($response->getBody()->getContents())->value;
            return view('boutique', compact('products'));
        } catch (GuzzleException $e) {
            return view('internError');
        }


        //dd($products);

        //echo $productes.name;
        //CALL VIEW BOUTIQUE
    }
}
