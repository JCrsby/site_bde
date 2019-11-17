<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventListController extends Controller
{
    public function events() {
        //return view events
        return view('events');
    }
}
