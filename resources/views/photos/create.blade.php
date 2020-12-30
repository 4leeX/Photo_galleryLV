@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Upload new Photo</h2>
    <form method="post" action="{{ route('photo-store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $albumId }}" name="album-id">
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" id="description" placeholder="Enter description">
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input name="photo" type="file" class="form-control" id="photo">
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection