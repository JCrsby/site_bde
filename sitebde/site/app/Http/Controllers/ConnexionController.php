<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

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


    public function deconnxion(){
        try{
            setcookie('token', '');
        }catch (Exception $exception){
            return view('internError');
        }
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
            //REQUEST + REQUEST CONTENT
            $response = $client->request('POST', '/api/user/login', [
                'form_params' => [
                    'email' => request('email'),
                    'password' => request('password')

                ]

            ]);

            //DECODE REQUEST'S RESPONSE
            $user = json_decode($response->getBody()->getContents());


            //INTERPRET RESPONSE
            if ($user->name == "error") {
                echo "user does not exist";
            } else {
                echo "connected";
                setcookie('token', $user->value->token);

                return redirect('/index');
            }


        } catch (GuzzleException $e) {
            return view('internError');
        }
    }

}
