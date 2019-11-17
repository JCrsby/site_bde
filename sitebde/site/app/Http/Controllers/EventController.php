<?php

namespace App\Http\Controllers;

use App\Page;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class EventController extends Controller
{

    public function index(){


        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://localhost:3000/',
                // You can set any number of default request options.
                'timeout' => 2.0
            ]);
            $response = $client->request('POST', '/api/event/all');
            $events = json_decode($response->getBody()->getContents())->value;
            return view('index',compact('events'));


        } catch (GuzzleException $e) {
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

            try {
                $response = $client->request('POST', '/api/event/all');



            } catch (GuzzleException $e) {
            }



            //  dd($products);

        //echo $productes.name;
        //CALL VIEW BOUTIQUE

    }



    public function getEvents($id = 0){
        // Fetch all records
        $userData['data'] = Page::getEventData($id);

        echo json_encode($userData);
        exit;
    }

}
