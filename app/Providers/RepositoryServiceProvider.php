<?php

namespace App\Providers;

use App\Interfaces\WeatherRepositoryInterface;
use App\Repositories\WeatherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(WeatherRepositoryInterface::class , WeatherRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
