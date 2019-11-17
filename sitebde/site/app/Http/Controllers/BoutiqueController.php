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

        //INTERPRET RESPONSE
        try {
            //POST REQUEST AT http://localhost:3000/api/product/all
            $response = $client->request('POST', '/api/product/all');
            //DECODE REQUEST'S RESPONSE
            $products = json_decode($response->getBody()->getContents())->value;
            //return view boutique
            return view('boutique', compact('products'));
        } catch (GuzzleException $e) {
            //Error request
            return view('internError');
        }
    }
}
