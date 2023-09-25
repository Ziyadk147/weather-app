<?php


namespace App\Services;


use App\Interfaces\WeatherRepositoryInterface;
use GuzzleHttp\Client;
use Stevebauman\Location\Facades\Location;

class WeatherRepositoryService implements WeatherRepositoryInterface {
    public function getWeather($data)
    {
        if(!isset($data->city)){
            $ip = '202.47.37.35'; //hard-coding the ip because $request->ip()returns my local ip
            $city = Location::get($ip)->cityName;
        }
        else{
            $city = $data->city;
        }

        $apikey = '07e9aca5e3224df6a87ee58ffc86fd13';

        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.weatherbit.io/v2.0/forecast/daily?city='.$city.'&key='.$apikey);
        dd(json_encode($response));
        $data = get_object_vars(json_decode($response->getBody()));
        $location = $data['location'];
        $current = $data['current'];
        $forecast = $data['forecast'];

        $payload['location'] = $location;
        $payload['current'] =  $current;
        $payload['today_weather'] = $forecast->forecastday[0];
        $payload['tomorrow_weather'] = $forecast->forecastday[1];
        $payload['after_tomorrow_weather'] = $forecast->forecastday[2];

        dd($payload);
    }
}