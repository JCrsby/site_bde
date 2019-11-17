<?php

namespace App\Http\Controllers;

use App\Page;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class EventController extends Controller
{

    public function index()
    {


        if(isset($_COOKIE['token'])){
            if(strlen($_COOKIE['token']) > 0){
                try {
                    $client = new Client([
                        // Base URI is used with relative requests
                        'base_uri' => 'http://localhost:3000/',
                        // You can set any number of default request options.
                        'timeout' => 2.0
                    ]);
                    $response = $client->request('POST', '/api/event/allplusplus',
                        [
                    'headers' => [
                        'Authorization' => 'Bearer '. $_COOKIE['token']
                    ]
                    ]
                    );
                    $events = json_decode($response->getBody()->getContents())->value;
                    if($events == "invalid token"){
                        dd($events.' '.$_COOKIE['token']);
                        setcookie('token', '', time() + 365*24*3600, null, null, false, true);
                        return redirect('/index');
                    }else {

                        return view('index', compact('events'));
                    }

                } catch (GuzzleException $e) {
                    return view('internError');
                }
            }
        }

        //INTERPRET RESPONSE
        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0
            ]);
            //POST request
            $response = $client->request('POST', '/api/event/all');
            //DECODE REQUEST'S RESPONSE
            $events = json_decode($response->getBody()->getContents())->value;
            return view('index', compact('events'));


            //return view index
            return view('index',compact('events'));
        } catch (GuzzleException $e) {
            return view('internError');
            //ERROR
        }
    }

    public function inscriptionEvent()
    {
         $idEvent = request('eventId');


        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0
            ]);

            $response = $client->request('POST', '/api/event/changestate',[
                'headers' => [
                    'Authorization' => 'Bearer '. $_COOKIE['token']
                ],
                'form_params' => [
                    'idEvent' => $idEvent
                ]
            ]);

            $apiresponse = json_decode($response->getBody()->getContents());
            return redirect('/index');

        } catch (GuzzleException $e) {
        }
            //INTERPRET RESPONSE
            try {
                //POST REQUEST AT http://localhost:3000/api/event/all
                $response = $client->request('POST', '/api/event/all');
            } catch (GuzzleException $e) {
                //ERROR
            }
    }




    public function getEvents($id = 0){
        // Fetch all records
        $userData['data'] = Page::getEventData($id);

        echo json_encode($userData);
        exit;
    }

}
