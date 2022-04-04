@extends('layouts.base')

@section('pageTitle', 'Comic Books')

@section('content')

    <div class="container">
            <h1>Comic Book List</h1>    
            <a type="button" class="btn btn-warning m-2" href="{{route('comic.create')}}" role="button">Add New Comic</a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">User Options</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th>{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                            <td><a type="button" class="btn btn-primary mt-5" href="{{route('comic.show', $comic->id)}}" role="button">See Details</a></td>
                            <td><a type="button" class="btn btn-secondary mt-5" href="{{route('comic.edit', $comic->id)}}" role="button">Edit Details</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            
    </div>
@endsection