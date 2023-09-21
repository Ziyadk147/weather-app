@extends('layouts.layout')
@section('content')

    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-3 px-sm-2 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="input-group">
                    <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="Enter a City" id="example-search-input">
                    <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5 pr-2" type="button">
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
        <div class="col py-3">
            Content area...
        </div>
    </div>


@endsection