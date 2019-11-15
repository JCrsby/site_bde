<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ConnexionController extends Controller
{
    /**
     *
     * @throws GuzzleException
     *
     *
     */
    public function connection()
    {
        return view('connexion');
    }

    public function formConnexion()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0,

        ]);
        try {
            $response = $client->request('POST', '/api/user/login', [
                'form_params' => [
                    'email' => request('email'),
                    'password' => request('password')

                ]

            ]);
            $user = json_decode($response->getBody()->getContents())->value->token;

            setcookie('token',$user);
            $test = $_COOKIE['token'];

            return view('index');
        } catch (GuzzleException $e) {
        }


    }

}
