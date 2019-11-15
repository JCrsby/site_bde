<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public static function getUser(){
        try{
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0,

            ]);
            //REQUEST + REQUEST CONTENT
            $response = $client->request('POST', '/api/user/userinfo'
               ,
                ['headers' => [
                    'Authorization' => 'Bearer '.$_COOKIE['token']
               ]

            ]
        );
            //DECODE REQUEST'S RESPONSE
            $user = json_decode($response->getBody()->getContents());
            $prenom = $user->value->Prenom;
            $nom = $user->value->Nom;
            return  $prenom.' '.$nom;

        }catch (GuzzleException $e){
            echo('echec');
        }


    }
}
