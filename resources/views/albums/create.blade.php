@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Create new album</h2>
    <form method="post" action="{{ route('album-store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" id="description" placeholder="Enter description">
        </div>

        <div class="form-group">
            <label for="cover-image">Cover Image</label>
            <input name="cover-image" type="file" class="form-control" id="cover-image">
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection