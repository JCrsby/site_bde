<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class boutiqueController extends Controller
{


    //METHODS CALLED FOR ROAD BOUTIQUE
    public function boutique()
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
        } catch (GuzzleException $e) {
        }

        $products = json_decode($response->getBody()->getContents())->value;

        //dd($products);

        //echo $productes.name;
        //CALL VIEW BOUTIQUE
        return view('boutique', compact('products'));
    }
}
