@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div>{{ $comic->title }}</div>
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h1> {{ $comic->id }}</h1>
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection
