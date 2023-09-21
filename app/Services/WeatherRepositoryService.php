<?php


namespace App\Services;


use GuzzleHttp\Client;
use Stevebauman\Location\Facades\Location;

class WeatherRepositoryService {
    public function getWeather($data)
    {
        if(!isset($data->city)){
            $ip = '202.47.37.35'; //hard-coding the ip because $request->ip()returns my local ip
            $city = Location::get($ip)->cityName;
        }
        else{
            $city = $data->city;
        }

        $apikey = '761d0269fe0145caa47201101232008';

        $client = new Client();

        $response = $client->get('http://api.weatherapi.com/v1/forecast.json?key='.$apikey.'&q='.$city.'&days=3');

        $data = get_object_vars(json_decode($response->getBody()));
        $location = $data['location'];
        $current = $data['current'];
        $forecast = $data['forecast'];

        $payload['location'] = $location;
        $payload['current'] =  $current;
        $payload['today_weather'] = $forecast->forecastday[0];
        $payload['tomorrow_weather'] = $forecast->forecastday[1];
        $payload['after_tomorrow_weather'] = $forecast->forecastday[2];

        return $payload;
    }
}