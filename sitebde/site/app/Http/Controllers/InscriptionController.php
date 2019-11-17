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
        //return view
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
                request()->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required', 'confirmed', 'min:8', function($attribute, $value, $fail){
                        if(!preg_match('/.*[A-Z].*/',$value) || !preg_match('/.*[0-9].*/',$value)){ $fail('Le mot de passe doit contenir au minimum une majuscule et un chiffre'); }}],
                    'password_confirmation' => ['required'],
                ], [
                    'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire minimum :min caractères.',

                ]);

//            //POST request
            $response = $client->request('POST', '/api/user/register', [
                // parameters
                'form_params' => [
                    'lastName' => request('lastName'),
                    'firstName' => request('firstName'),
                    'campus' => request('campus'),
                    'password' => Hash::make(request('password')),
                    'email' => request('email')
                ]]);

            //DECODE REQUEST'S RESPONSE
            $apiresponse = json_decode($response->getBody()->getContents())->value;

            //INTERPRET RESPONSE
            if ($apiresponse == 'empty param') {
                //TODO : show it like a mistake on the web ste
            } else if ($apiresponse == 'user created') {
                return redirect('/connexion');
            } else if ($apiresponse == 'already exist') {
                echo('already exist');
            } else {
                //TODO : show it like a mistake on the web ste
                echo('unknown error');

            }
        } catch (GuzzleException $e) {
            //ERROR
            return view('internError');
        }


    }

//    function errorInscription()
//    {
//        //INSCRIPTION ERROR MESSAGE
//        request()->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required', 'confirmed', 'min:8'],
//            'password_confirmation' => ['required'],
//        ], [
//            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire minimum :min caractères.'
//        ]);
//
//    }

}
