<?php

namespace App\Http\Controllers;

use http\Client;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCities()
    {


        $response = $client->get('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$keyword.'&language=en&types=geocode&key='.$apikey);
    }
}


