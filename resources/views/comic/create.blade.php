@extends('layouts.base')

@section('pageTitle', 'Add Comic Book')

@section('content')

<div class="container">

    <h1>Add New Comic</h1>

    <form method="POST" action="{{route('comic.store')}}">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Cover Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter url of Cover Image">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Comic Title">
        </div>
        <div class="form-floating">
            <label for="description">Description</label>
            <textarea class="form-control" placeholder="Enter brief description" id="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Enter Comic Series">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        
    </form>
</div>


@endsection