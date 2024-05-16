@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Comic</h1>
        @include('partials.validation-errors')


        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Batman" value="{{ old('title') }}" />
                <small id="helpId" class="form-text text-muted">Type a title for the comic</small>

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" placeholder="https//www." value="{{ old('thumb') }}" />
                <small id="helpId" class="form-text text-muted">Type a image for the comic</small>
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelper" placeholder="$00.00" value="{{ old('price') }}" />
                <small id="helpId" class="form-text text-muted">Type a price for the comic</small>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelper" placeholder="Batman: Series" />
                <small id="helpId" class="form-text text-muted">Type a series for the comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="sale_dateHelper" placeholder="2024-05-15"
                    value="{{ old('sale_date') }}" />
                <small id="helpId" class="form-text text-muted">Type a sale date for the comic</small>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="titleHelper" placeholder="graphic-novel" value="{{ old('type') }}" />
                <small id="helpId" class="form-text text-muted">Type a type for the comic</small>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Create
            </button>


        </form>
    </div>
@endsection
