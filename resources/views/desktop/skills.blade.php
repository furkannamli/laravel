@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 9; $i++)
                <div class="m-5 skill-card text-center">
                    <div style="margin: auto">
                        <img class="mt-1" height="64px" src="{{ $skills['media'][$i] }}" alt="">
                    </div>
                    <div class="vertical-align">
                        <h1>{{$skills['name'][$i]}}</h1>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection

