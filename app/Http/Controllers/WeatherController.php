<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $apikey = '761d0269fe0145caa47201101232008';

        $city = $request->city;

        $client = new Client();

        $response = $client->get('http://api.weatherapi.com/v1/forecast.json?key='.$apikey.'&q='.$city.'&days=4');;

        $data = json_decode($response->getBody() , true);

        $payload['location'] = $data['location'];
        $payload['current'] = $data['current'];
        $payload['today_weather'] = $data['forecast']['forecastday'][0]; //for extra details for the current weather
        $payload['sat_weather'] = $data['forecast']['forecastday'][1];
        $payload['sun_weather'] = $data['forecast']['forecastday'][2];

//        dd($payload);
        if($request->ajax == true){
            return response()->json($payload);
        }
        else{
            return view('main.main' , $payload);

        }
    }

    public function getCurrentLocation(Request $request)
    {
        $ip = '202.47.37.35'; //hard-coding the ip because $request->ip()returns my local ip
        $city = Location::get($ip)->cityName;
        return response()->json([
            'city' => $city
        ]);
    }

}
