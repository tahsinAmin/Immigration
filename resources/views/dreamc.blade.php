@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                DreamC List
            </div>
            @foreach($dreamc as $dc)
                <div>
                  {{ $dc->name }} - {{ $dc->email }} - {{ $dc->age }}
                </div>
            @endforeach
        </div>
    </div>
@endsection