@extends('layouts.app')

@section('content')

<div class="container">
    @if(count($albums) > 0)
      <div class="row">
        @foreach($albums as $album)
        <div class="col-m4-4">
          <div class="card mb-4 ml-1 shadow-sm">
            <img src="/storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->cover_image }}" height="300px" width="370">
            <div class="card-body">
              <p class="card-text">{{ $album->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ route('album-show', $album->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">{{ $album->name }}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    @else
        <h3>No albums yet</h3>
    @endif
</div>

@endsection