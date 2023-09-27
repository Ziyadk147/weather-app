<?php


namespace App\Services;


use App\Interfaces\WeatherRepositoryInterface;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Stevebauman\Location\Facades\Location;

class WeatherRepositoryService  {


    public function convertDateToDay($date)
    {
        return date('l', strtotime($date));
    }
    public function getCity($request_city)
    {
        if(isset($request_city->city)){
            return $request_city->city;
        }
        else{
            $ip = '202.47.37.35'; //hard-coding the ip because $request->ip()returns my local ip
            return Location::get($ip)->cityName;
        }
    }
    public function getMonth($date)
    {
        return date('F' , strtotime($date));
    }
    public function getWeather($data)
    {

        $city = $this->getCity($data);


        $apikey = '07e9aca5e3224df6a87ee58ffc86fd13';
        $client = new \GuzzleHttp\Client();

        $current_response = $client->get('https://api.weatherbit.io/v2.0/current?city='.$city.'&key='.$apikey.'&include=hourly');
        $forecast_response = $client->get('https://api.weatherbit.io/v2.0/forecast/daily?city='.$city.'&key='.$apikey);

        $forecast_data = get_object_vars(json_decode($forecast_response->getBody()));
        $current_data = get_object_vars(json_decode($current_response->getBody()));

        $payload['current'] = $current_data['data'][0];

        $payload['current_day'] = $this->convertDateToDay($current_data['data'][0]->datetime);
        $payload['current_month'] = $this->getMonth($current_data['data'][0]->datetime);
        $payload['forecast'] = $forecast_data;
        return $payload;
    }
}