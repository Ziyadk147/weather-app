@extends('layouts.layout')
@section('content')
    <style>
        .row .col{
            color: white;
        }
    </style>

    <div class="row flex-nowrap">

        <div class="col-auto col-md-3 col-xl-3 px-sm-2" style="background-color: #171719">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100" id="sidebarCollapse">
                <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="Enter a City" id="sidebar-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white pl-2 border-bottom-0 border rounded-pill ms-n5 pr-2" id="sidebar-search-button" type="button">
                            <i class="ml-2 fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <div class="row mt-5 mx-auto">
                    <div class="col-8 mx-auto" id="sidebar-img">
                    </div>
                    <div class="w-100"></div>
                    <div class="col mt-5">
                        <h1 class="display-2" id="sidebar-temp">27°C</h1>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col">
                        <span class="fw-bolder fs-4" id="sidebar-day">Monday,</span>
                        <span class="fw-lighter fs-5 ml-2" id="sidebar-time">16:00</span>
                    </div>
                    <hr class="hr mt-2 hr-blurry">
                    <div class="w-100"></div>
                    <div class="col">
                        <i class="fa-solid fa-cloud fa-2xl"></i>
                        <span class="fw-bolder" id="sidebar-temp-detail">Mostly Cloudy</span>
                    </div>
                    <div class="w-100">
                    </div>
                    <div class="col mt-4">
                        <i class="fa-solid fa-cloud-rain fa-2xl" style="color: #005eff;"></i>
                        <span class="fw-bold" id="sidebar-rain-chance">Rain-40%</span>
                    </div>
                </div>
                <div class="row mt-4 mx-2">
                    <div class="col mx-auto">
                        <h2 class="display-4 fw-bolder" id="sidebar-city">Karachi</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="col py-3" style="background-color: #343434">
            <div class="row mx-2">
                <div class="col fs-2 fw-bolder">Weekly</div>
            </div>
            <div class="row mx-1 mt-4" id="weekly">
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card text-white" style="background-color: #171719;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Monday</h5>
                            <img src="{{asset('/64x64/day/113.png')}}" style="width: 80px" alt="">
                            <p class="card-text fw-bolder fs-2">25°C</p>
                            <p class="card-text fs-3">60%</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-4 mx-2">
                <div class="col-12 mb-4">
                    <h2 class="fw-bolder fs-2">Today's Highlights</h2>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100" style="background-color: #171719;">
                        <div class="card-body text-center text-white" >
                            <h5 class="fw-bold mb-3">UV Index</h5>
                            <span class="fw-bolder fs-2">5</span>
                            <span class="fw-lighter fs-5">Units</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100" style="background-color: #171719;">
                        <div class="card-body text-center text-white">
                            <h5 class="fw-bold mb-3">Wind Status</h5>
                            <span class="fw-bolder fs-2">7.2</span>
                            <span class="fw-lighter fs-5">Km/Hr</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100" style="background-color: #171719;">
                        <div class="card-body text-center text-white">
                            <h5 class="fw-bold mb-3">Sunrise & Sunset</h5>
                            <div class="row px-2">
                                <div class="col">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                    <span class="fw-bold">6:16AM</span>
                                </div>
                                <div class="col">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                    <span class="fw-bold">6:16AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100" style="background-color: #171719;">
                        <div class="card-body text-center text-white">
                            <h5 class="fw-bold mb-3">Humidity</h5>
                            <span class="fw-bolder fs-1">12</span>
                            <span class="fw-light fs-2">%</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100" style="background-color: #171719;">
                        <div class="card-body text-center text-white">
                            <h5 class="fw-bold mb-3">Visibility</h5>
                            <span class="fw-bolder fs-1">12</span>
                            <span class="fw-light fs-2">%</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100" style="background-color: #171719;">
                        <div class="card-body text-center text-white">
                            <h5 class="fw-bold mb-3">Air Quality</h5>
                            <span class="fw-bolder fs-1">12</span>
                            <span class="fw-light fs-2">%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            // var cTime = moment().format();
            // console.log(cTime);
            $('#sidebar-search-button').on('click',function(){
                const city = $('#sidebar-search-input').val();
                $.ajax({
                    url:'{{route('weather.get')}}',
                    type:'POST',
                    data:{
                        city:city,
                        _token:'{{csrf_token()}}'
                    },
                    success:function(success){
                        getData(success)
                    }
                })
            })
            function getData(response){
                // TODO://implement the Logic
                const current = response.current;
                const forecast = response.forecast.data;
                $("#sidebar-temp").empty().html(current.temp+"°C")
                $("#sidebar-day").empty().html(response.current_day)
                $("#sidebar-time").empty().html(response.current_month)
                $("#sidebar-temp-detail").empty().html(response.current.weather.description)
                $("#sidebar-rain-chance").empty().html(response.current.precip+'%')
                $("#sidebar-city").empty().html(response.current.city_name)
                if(current.pod === 'd'){
                    $("#sidebar-img").empty().html(`@include('common.weather-img.sun')`)
                }
                else{
                    $("#sidebar-img").empty().html(`@include('common.weather-img.moon')`)
                }
                $('#sidebar-temp-detail-img').addClass('fa-solid fa-'+current.weather.description)
                $.each(forecast , function(key, value){
                    let day = moment(value.datetime ,'YYYY-MM-DD')

                })
            }
            $('#sidebar-search-button').trigger('click');
        })
    </script>
@endsection