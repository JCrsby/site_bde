<?php

namespace App\Http\Controllers;

use App\Page;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class EventController extends Controller
{

    public function index(){

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
            //return view index
            return view('index',compact('events'));
        } catch (GuzzleException $e) {
            //ERROR
        }
}

    public function inscriptionEvent()
        {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0
            ]);

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
