@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $comics->thumb }}" alt="">
            </div>
            <div class="col">
                <h1> {{ $comics->id }}</h1>
                <h2>{{ $comics->title }}</h2>
                {{ $comics->description }}
            </div>
        </div>
    </div>
@endsection
