@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div>Si vede?</div>
            {{-- <div>{{ $comics['title'] }}</div> --}}
            <div>{{ $comic->title }}</div>

            {{-- <div class="col">
                <img src="{{ $comics->thumb }}" alt="">
            </div>
            <div class="col">
                <h1> {{ $comics->id }}</h1>
                <h2>{{ $comics->title }}</h2>
                <p>{{ $comics->description }}</p>
            </div> --}}
        </div>
    </div>
@endsection
