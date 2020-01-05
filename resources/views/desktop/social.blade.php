@extends('master')
@section('content')
<div class="container">
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
            <div class="m-5 social-card">
               <a href="{{ $links['profile'][$i] }}"><img src="{{ $links['media'][$i] }}"></a>
            </div>
        @endfor
    </div>
</div>
@endsection

