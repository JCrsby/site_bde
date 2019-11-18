<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PanierController extends Controller
{

    function view()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        try {
            $response = $client->request('POST', '/api//basket/all',
                [
                    'headers' => [
                        'Authorization' => $_COOKIE['token']
                    ]
                ]
            );

        } catch (GuzzleException $e) {
        }

        $basket = json_decode($response->getBody()->getContents())->value->nombres;

        return view('panier', compact('basket'));
    }

    public function panier()
    {

        //INTERPRET RESPONSE
        try {
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

        } catch (GuzzleException $e) {
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
            $response = $client->request('POST', '/api/basket/add',
                [
                    'headers' => [
                        'Authorization' => $_COOKIE['token']
                    ],
                    'form_params' => [
                        'idProduct' => request('idProduct')
                    ]
                ]
            );

        } catch (GuzzleException $e) {
            return view('internError');

        }

        $event = json_decode($response->getBody()->getContents());

        if ($event->name === "error") {
            return view('internError');
//            dd($event->value);
        } else {
            return redirect('/boutique');
        }


    }

    public function deletePanier()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        try {
            $response = $client->request('DELETE', '/api/basket/delete',
                [
                    'headers' => [
                        'Authorization' => $_COOKIE['token']
                    ],
                    'form_params' => [
                        'idProduct' => request('idProduct')
                    ]
                ]
            );


            $json = json_decode($response->getBody()->getContents())->name;


            if ($json === "error") {
            return view('internError');
            } else {

                return redirect('/cart');
            }
        } catch (GuzzleException $e) {
            return view('internError');
        }

    }


}
