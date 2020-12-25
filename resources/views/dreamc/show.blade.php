@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
        <h1>{{ $dc->name }}</h1>
        <p class="email"> Email - {{ $dc->email }}</p>
        <p class="base"> Age - {{ $dc->age }}</p>
    </div>
@endsection