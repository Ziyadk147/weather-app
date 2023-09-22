@extends('layouts.layout')
@section('content')
    <style>
        .row{
            color: white
        ;
        }
    </style>

    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-3 px-sm-2" style="background-color: #171719">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="Enter a City" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white pl-2 border-bottom-0 border rounded-pill ms-n5 pr-2" type="button">
                            <i class="ml-2 fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <div class="row mt-5 mx-auto">
                    <div class="col-8 mx-auto">
                        @include('common.weather-img.sun')
                    </div>
                    <div class="w-100"></div>
                    <div class="col mt-5">
                        <h1 class="display-2">27°C</h1>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col">
                        <span class="fw-bolder fs-4">Monday,</span>
                        <span class="fw-lighter fs-5 ml-2">16:00</span>
                    </div>
                    <hr class="hr mt-2 hr-blurry">
                    <div class="w-100"></div>
                    <div class="col">
                        <i class="fa-solid fa-cloud fa-2xl"></i>
                        <span class="fw-bolder">Mostly Cloudy</span>
                    </div>
                    <div class="w-100">
                    </div>
                    <div class="col mt-4">
                        <i class="fa-solid fa-cloud-rain fa-2xl" style="color: #005eff;"></i>
                        <span class="fw-bold">Rain-40%</span>
                    </div>
                </div>
                <div class="row mt-4 mx-2">
                    <div class="col mx-auto">
                        <h2 class="display-4 fw-bolder">Karachi</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col py-3" style="background-color: #343434">
            <div class="row mx-2">
                <div class="col fs-2 fw-bolder">Weekly</div>
            </div>
            <div class="row mx-2 mt-4">
                <div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="col">
                    <div class="card" style="width: 7rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col mx-1">
                                    <span class="fw-bolder text-white">Sunday</span>
                                </div>
                                <div class="col w-100">
                                    <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                </div>
                                <div class="col mx-2">
                                    <span class="fw-bolder">15</span>
                                    <span class="fw-lighter">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mx-2">
                <span class="fw-bolder fs-2">Today's Highlights</span>
                <div class="col mt-4">
                    <div class="card" style="width: 16rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col">
                                    <span class="fw-bold ">UV Index</span>
                                </div>
                                <div class="w-100"></div>
                                <div class="col mt-4">
                                    <span class="fw-bolder fs-2">
                                        5
                                    </span>
                                    <span class="fw-lighter fs-5">
                                        Units
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card" style="width: 16rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <div class="col">
                                    <span class="fw-bold ">Wind Status</span>
                                </div>
                                <div class="w-100"></div>
                                <div class="col mt-4">
                                    <span class="fw-bolder fs-2">
                                        7.2
                                    </span>
                                    <span class="fw-lighter fs-5">
                                        Km/Hr
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card" style="width: 16rem; background-color: #171719;">
                        <div class="card-body">
                                <div class="row px-2">
                                    <span class="fw-bold">Sunrise & Sunset</span>
                                    <div class="col mt-2">
                                        <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                        <span class="fw-bold">6:16AM</span>
                                    </div>
                                    <div class="col mt-2">
                                        <img src="{{asset('/64x64/day/113.png')}}" alt="">
                                        <span class="fw-bold">6:16AM</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col mt-4">
                    <div class="card" style="width: 16rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <span class="fw-bold">Humidity</span>
                                <div class="col mt-4">
                                    <span class="fw-bolder fs-1">
                                        12
                                    </span>
                                    <span class="fw-light fs-2">
                                        %
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card" style="width: 16rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <span class="fw-bold">Visibility</span>
                                <div class="col mt-4">
                                    <span class="fw-bolder fs-1">
                                        12
                                    </span>
                                    <span class="fw-light fs-2">
                                        %
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="card" style="width: 16rem; background-color: #171719;">
                        <div class="card-body">
                            <div class="row px-2">
                                <span class="fw-bold">Air Quality</span>
                                <div class="col mt-4">
                                    <span class="fw-bolder fs-1">
                                        12
                                    </span>
                                    <span class="fw-light fs-2">
                                        %
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection