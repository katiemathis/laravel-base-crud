@extends('layouts.base')

@section('pageTitle') 
    {{$comic->title}}
@endsection

@section('content')

    <div class="container">
            <h1>{{$comic->title}}</h1>
            <div class="card m-5" style="width: 20rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}} Cover Photo">
                <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: {{$comic->price}}</li>
                <li class="list-group-item">Series: {{$comic->series}}</li>
                </ul>
            </div>
            <a type="button" class="btn btn-primary" href="{{route('comic.index')}}" role="button">Go Back</a>
    </div>

@endsection