<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{

    function view()
    {
        return view('inscription');
    }

    function inscription()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        try {
            $response = $client->request('POST', '/api/user/register', [
                'form_params' => [
                    'lastName' => request('lastName'),
                    'firstName' => request('firstName'),
                    'campus' => request('campus'),
                    'password' => Hash::make(request('password')),
                    'email' => request('email')
                ]]);

//            dd(request('lastName'), request('firstName'), request('campus'), request('password'));
            $apiresponse = json_decode($response->getBody()->getContents())->value;

            if ($apiresponse == 'empty param') {
                //TODO : show it like a mistake on the web ste
                echo('erreur interne');
            } else if ($apiresponse == 'user created') {
                return redirect('/connexion');
            } else if ($apiresponse == 'already exist') {
                echo('already exist');
            } else {
                //TODO : show it like a mistake on the web ste
                echo('unknown error');

            }
        } catch (GuzzleException $e) {
            return view('internError');
        }


    }


}
