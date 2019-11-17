<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use mysql_xdevapi\Exception;

class ConnexionController extends Controller
{
    /**
     *
     *  @throws GuzzleException
     *
     *
     */

    public function connection()
    {
        //View connection
        return view('connexion');
    }


    public function deconnxion(){
        //create a cookie
        try{
            setcookie('token', '');
        }catch (Exception $exception){
            //View error
            return view('internError');
        }
        //Return main page
        return redirect('/index');
    }


    public function formConnexion()
    {
        try {
            //CREATE A CLIENT GUZZLE
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0,

            ]);

            request()->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            //REQUEST + REQUEST CONTENT
            $response = $client->request('POST', '/api/user/login', [
                //PARAM
                'form_params' => [
                    'email' => request('email'),
                    'password' => request('password')
                ],

            ]);

            //DECODE REQUEST'S RESPONSE
            $user = json_decode($response->getBody()->getContents());

            //INTERPRET RESPONSE
            if ($user->name == "error") {
                //TODO : show it like a mistake on the web ste
            } else {
                //create a cookie and return "connected"
                echo "connected";
                setcookie('token', $user->value->token);
                //RETURN MAIN PAGE
                return redirect('/index');
            }

        } catch (GuzzleException $e) {
            //View error
            return view('internError');
        }
    }

//    function errorConnexion()
//    {
//        request()->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//    }
}
