@extends('layouts.base')

@section('pageTitle', '{{$comic->title}}')

@section('content')

    <div class="container">
        <h1>{{$comic->title}}</h1>
    

            <div class="card" style="width: 50rem;">
                <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: {{$comic->price}}</li>
                <li class="list-group-item">Series: {{$comic->series}}</li>
                </ul>
            </div>
    </div>

@endsection