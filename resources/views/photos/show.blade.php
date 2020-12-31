@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-m4-4">
          <div class="card mb-4 ml-1 shadow-sm">
            <img src="/storage/albums/{{ $album->id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" height="300px" width="370">
            <div class="card-body">
              <p class="card-text">{{ $photo->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ route('photo-show', $photo->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">{{ $photo->size }}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection