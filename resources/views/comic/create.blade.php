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
        <div class="mb-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Enter Comic Series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Enter Sale Date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        
    </form>
</div>


@endsection