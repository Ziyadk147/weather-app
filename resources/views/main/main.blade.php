@extends('layouts.layout')
@section('content')


    <div class="row mt-2 justify-content-center">
        <div class="col-lg-8 mx-auto">
            <select class="form-select" aria-label="Default select example">
                <option selected>Enter A City</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-lg-3 w-50 mt-4">
            <div class="text-center">
                <h1 class="fs-1 fw-bolder lh-1 font-monospace">Karachi</h1>
                <span class="fs-6 fw-lighter font-monospace text-wrap">Chance Of Rain</span>
            </div>
        </div>
        <div class="col-lg-3 mt-4">
            <div class="sun">
                <div class="sun-circle"></div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-lg-6 mt-4" style="">
            <h1 class="fw-bolder ml-2 lh-1 font-monospace " style="font-size: 90px;margin-left: 70px" >27°</h1>
        </div>

    </div>
    <style>
        .sun {
            width: 100px;
            height: 100px;
            background-color: yellow;
            border-radius: 50%;
            position: relative;
        }

        .sun-circle {
            width: 20px;
            height: 20px;
            background-color: yellow;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .sun-rays {
            width: 2px;
            height: 40px;
            background-color: yellow;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endsection