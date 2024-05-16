@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2>Products</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><img width="60" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td><a class="btm btn-dark" href="{{ route('comics.show', $comic) }}"> <i
                                        class="fa-solid fa-eye"></i></a>
                                <a class="btm btn-dark" href="{{ route('comics.edit', $comic) }}"> <i
                                        class="fa-solid fa-pen-to-square"></i></a>


                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>






                            </td>
                        </tr>
                    @empty

                        <tr class="">
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                            <td scope="row">Sorry not Comics</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $comics->links('pagination::bootstrap-5') }}

    </div>
@endsection
