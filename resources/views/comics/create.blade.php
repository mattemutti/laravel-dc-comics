@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Batman" />
                <small id="helpId" class="form-text text-muted">Type a title for the comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https//www." />
                <small id="helpId" class="form-text text-muted">Type a image for the comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="$00.00" />
                <small id="helpId" class="form-text text-muted">Type a price for the comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Batman: Series" />
                <small id="helpId" class="form-text text-muted">Type a series for the comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="2024-05-15" />
                <small id="helpId" class="form-text text-muted">Type a sale date for the comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="titleHelper"
                    placeholder="graphic-novel" />
                <small id="helpId" class="form-text text-muted">Type a type for the comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Create
            </button>

        </form>
    </div>
@endsection
