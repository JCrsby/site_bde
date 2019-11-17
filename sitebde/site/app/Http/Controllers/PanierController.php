<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PanierController extends Controller
{

    function view(){
        return view('panier');
    }

    public function panier()
    {

        //INTERPRET RESPONSE
        try{
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0
            ]);
            //POST REQUEST
            $response = $client->request('POST', '/api/command/addToBascket');
            //DECODE JSON
            $cart = json_decode($response->getBody()->getContents())->value;

        }catch (GuzzleException $e){
            //ERROR
        }
        //RESPONSE
        return view('panier', compact('cart'));
    }

    public function addToBascket()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        try {
            $response = $client->request('POST', '/api/event/oneevent',
                [
                    'headers' => [
                        'Authorization' => $_COOKIE['token']
                    ]
                ]
            );

        } catch (GuzzleException $e) {
        }
        $event = json_decode($response->getBody()->getContents())->value;


    }


}
