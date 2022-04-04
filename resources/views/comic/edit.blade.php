@extends('layouts.base')

@section('pageTitle')

    Edit: {{$comic->title}}

@endsection

@section('content')

<div class="container">

    <h1>Edit {{$comic->title}}</h1>

    <form method="POST" action="{{route('comic.update', ['comic' => $comic->id])}}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Cover Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter url of Cover Image" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Comic Title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="{{$comic->description}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Enter Comic Series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Enter Sale Date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>

        
    </form>
</div>