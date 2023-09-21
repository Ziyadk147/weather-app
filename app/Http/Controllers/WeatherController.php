<?php

namespace App\Http\Controllers;

use App\Interfaces\WeatherRepositoryInterface;
use App\Services\WeatherRepositoryService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;

class WeatherController extends Controller
{

    public function __construct(WeatherRepositoryService $weatherRepositoryService)
    {
        $this->WeatherRespositoryService = $weatherRepositoryService;
    }

    public function index()
    {
     return view('main.main');
    }
    public function getWeather(Request $request)
    {
        return response()->json($this->WeatherRespositoryService->getWeather($request));
    }
}
