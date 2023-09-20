@extends('layouts.layout')
@section('content')

    <div class="row mt-2 justify-content-center">
        <div class="col-lg-8 mx-auto">

            <div class="form-row align-items-center">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="city" placeholder="Enter a City" aria-label="City" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="citysubmit">Search</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-lg-3 w-50 mt-4">
            <div class="text-center">
                <h1 class="fs-1 fw-bolder lh-1 font-monospace" id="cityName"></h1>
                <span class="fs-6 fw-lighter font-monospace text-wrap" id="chancerain"></span>
            </div>
        </div>
        <div class="col-lg-3 mt-4" id="img-col">
            @if(isset($current->is_day) && $current->is_day == 1)
                @include('common.weather-img.sun')
            @elseif(isset($current->is_day) && $current->is_day == 0)
                @include('common.weather-img.moon')
            @endif
        </div>
        <div class="w-100"></div>
        <div class="col-lg-6 mt-4" style="">
            <h1 class="fw-bolder ml-2 lh-1 font-monospace " id="temp" style="font-size: 90px;margin-left: 75px" ></h1>
        </div>
    </div>
    <div class="row w-75 mx-auto mt-4">
        <div class="card-group" id="forecastbody">


        </div>
    </div>

    <script>



        $(document).ready(function (){

            function forecast(success){
                let location = success.location
                let current = success.current
                let today_data = success.today_weather
                let tomorrow_data = success.tomorrow_weather
                let after_tomorrow_data = success.after_tomorrow_weather
                let html = `
                     <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Today</h3>
                            <div class="row">
                                <div class="col">
                                    <h5>Average Temperature</h5>
                                    <p>${today_data.day.avgtemp_c}°C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Lowest Temperature</h5>
                                    <p>${today_data.day.mintemp_c}°C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Highest Temperature</h5>
                                    <p>${today_data.day.maxtemp_c}°C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tomorrow</h3>
                            <div class="row">
                                <div class="col">
                                    <h5>Average Temperature</h5>
                                    <p>${tomorrow_data.day.avgtemp_c}°C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Lowest Temperature</h5>
                                    <p>${tomorrow_data.day.mintemp_c}°C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Highest Temperature</h5>
                                    <p>${tomorrow_data.day.maxtemp_c}°C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Day after Tomorrow</h3>
                            <div class="row">
                                <div class="col">
                                    <h5>Average Temperature</h5>
                                    <p>${after_tomorrow_data.day.avgtemp_c}°C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Lowest Temperature</h5>
                                    <p>${after_tomorrow_data.day.mintemp_c}°C</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>Highest Temperature</h5>
                                    <p>${after_tomorrow_data.day.avgtemp_c}°C</p>
                                </div>
                            </div>
                        </div>
                   </div>`

                $('#cityName').empty().html(location.name)
                $('#chancerain').empty().html('Chance of rain '+today_data.day.daily_chance_of_rain)
                $('#temp').empty().html(current.temp_c +'°C')
                if(current.is_day === 1){
                    $('#img-col').empty().html(`@include('common.weather-img.sun')`)
                }
                else{
                    $('#img-col').empty().html(`@include('common.weather-img.moon')`)
                }
                $('#forecastbody').empty().html(html);
            }

            $("#citysubmit").on('click' , function(){
                let city = $(this).parent().siblings().val()
                $.ajax({
                    url:'{{route('weather.get')}}',
                    type:'POST',
                    data:{
                        city:city,
                        _token:'{{csrf_token()}}'
                    },
                    dataType:'JSON',
                    success:function(success){
                       forecast(success); //calls the forecast function which renders the whole page with dynamic data
                    }
                })
            });
            $("#citysubmit").trigger('click');
        })
    </script>
@endsection

