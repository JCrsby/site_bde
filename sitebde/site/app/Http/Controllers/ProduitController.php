<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProduitController extends Controller
{
    public function produits()
    {
        if (isset($_COOKIE['token'])) {
            if (strlen($_COOKIE['token']) >= 0) {
                if(NavController::getUser()->value->id_ROLE == 1) {
                    return view('/produits');
                }return redirect('/index');
            }return redirect('/index');
        }
        return redirect('/index');
    }

    public function produitsAdd()
    {

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

    try { request()->validate([
        'name' => ['required'],
        'description' => ['required'],
        'price' => ['required'],
        'img' => ['required'],
        'categories' => ['required'],

    ]);
        //POST request
        $response = $client->request('POST', '/api/product/add', [
            // parameters
            'form_params' => [
                'name' => request('name'),
                'description' => request('description'),
                'price' => request('price'),
                'img' => (request('img')),
                'categories' => request('categories')
            ]]);

        return redirect('/produits');
    } catch (GuzzleException $e) {
        //ERROR
        return view('internError');
    }
    }
    public function produitsDelete(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/',
            // You can set any number of default request options.
            'timeout' => 2.0
        ]);

        try { request()->validate([
            'delete' => ['required'],
        ]);
            //POST request
            $response = $client->request('POST', '/api/product/add', [
                // parameters
                'form_params' => [
                    'delete' => request('delete'),

                ]]);

            return redirect('/produits');
        } catch (GuzzleException $e) {
            //ERROR
            return view('internError');
    }
}}
