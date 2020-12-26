
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <i class="fab fa-canadian-maple-leaf" style="font-size: 55px; color: #c60045"></i>
        <div class="title m-b-md">
            DreamcC
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/dreamc/create">Submit Form</a>
    </div>
</div>
@endsection