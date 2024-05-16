@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>{{ $comic->title }}</div>
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <h2>{{ $comic->title }}</h2>
                        <div class="action">
                            <a class="btn btn-dark" href="{{ route('comics.edit', $comic) }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-secondary" href="{{ route('comics.index') }}">
                                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></i>
                                Back to Comics
                            </a>
                        </div>
                    </div>
                    <p>{{ $comic->description }}</p>
                    <br>
                    <div>Type: {{ $comic->type }}</div>
                    <div>Sale Date: {{ $comic->sale_date }}</div>
                    <div class="text-danger">Price: {{ $comic->price }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
