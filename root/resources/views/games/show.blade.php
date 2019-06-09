@extends('layouts.app')

@section('content')

<h1>{{ $game->title }} (€{{ $game->price }})</h1>
<img src="{{ $game->image }}" alt="{{ $game->title }}" class="poster-img">
<p>{{ $game->desc }}</p>

@foreach ($game->ratings as $rating)
  <div class="container card">
    <div class="row">
      <p><h5>{{ $rating->name }}</h5></p>
    </div>
    <div class="row">
      <p>
        Comment: {{ $rating->comment }}
      </p>
    </div>
@endforeach

@endsection
