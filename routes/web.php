<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\WeatherController::class,'index'])->name('weather.index');
Route::get('/weather/get' ,[ \App\Http\Controllers\WeatherController::class,'getWeather'])->name('weather.get');
Route::post('/weather/location',[\App\Http\Controllers\WeatherController::class,'getCurrentLocation'])->name('weather.currentlocation');
