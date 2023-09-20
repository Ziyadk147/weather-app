<?php

namespace Tests\Unit;

use App\Http\Controllers\WeatherController;
use Illuminate\View\View;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class indexTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_index_has_a_successful_response()
    {
        $response = $this->get(route('weather.index'));

        $response->assertStatus(200);
    }

    public function test_index_returns_a_view()
    {
        $controller = new WeatherController();

        $response = $controller->index();

        $this->assertInstanceOf(View::class, $response);

    }
}
