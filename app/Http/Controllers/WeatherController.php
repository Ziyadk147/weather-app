<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $apikey = '761d0269fe0145caa47201101232008';

        $city = $request->city;

        $client = new Client();

        $response = $client->get('http://api.weatherapi.com/v1/current.json?key='.$apikey.'&q='.$city);

        $data = json_decode($response->getBody());
        $payload['location'] = $data->location;
        $payload['current'] = $data->current;
//        dd($payload);
        return view('main.main' , $payload);


    }
}
