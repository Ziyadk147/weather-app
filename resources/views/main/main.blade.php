@extends('layouts.layout')
@section('content')

    <div class="row mt-2 justify-content-center">
        <div class="col-lg-8 mx-auto">
            <form action="{{route('weather.get')}}" method="POST">
                @csrf
                <div class="form-row align-items-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="city" placeholder="Enter a City" aria-label="City" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-lg-3 w-50 mt-4">
            <div class="text-center">
                <h1 class="fs-1 fw-bolder lh-1 font-monospace" id="cityName">{{isset($location->name)?$location->name:''}}</h1>
                <span class="fs-6 fw-lighter font-monospace text-wrap" id="chancerain">Chance Of Rain:{{isset($current->precip_mm)?$current->precip_mm:''}}</span>
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
            <h1 class="fw-bolder ml-2 lh-1 font-monospace " id="temp" style="font-size: 90px;margin-left: 75px" >{{isset($current->temp_c)?$current->temp_c:''}}°</h1>
        </div>
    </div>

    <script>



        $(document).ready(function (){


           let $city = 'karachi'
            function getCurrentLocation(){
                $.ajax({
                    url:'{{route('weather.currentlocation')}}',
                    type:'POST',
                    data:{
                        _token:'{{csrf_token()}}'
                    },
                    dataType:'JSON',
                    success:function(success){
                        return success['city']
                    }
                })
            }
            if($('#cityName').html() === ""){
                $.ajax({
                    url:'{{route('weather.get')}}',
                    type:"post",
                    data:{
                        ajax:true,
                        city:$city,
                        _token:'{{csrf_token()}}'
                    },
                    dataType:'JSON',
                    success:function(success){
                        $('#cityName').html(success['location']['name'])
                        $('#chancerain').html('chance of rain:' + success['current']['precip_mm'])
                        $('#temp').html(success['current']['temp_c']+'°')
                        if(success['current']['is_day'] === 1){
                            $('#img-col').html(`@include('common.weather-img.sun')`)
                        }
                        else{
                            $('#img-col').html(`@include('common.weather-img.moon')`)
                        }


                    }

                })

            }

        })
    </script>
@endsection

