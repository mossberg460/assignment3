@extends('layouts.app')

@section('content')

<h1>{{ $game->title }} (€{{ $game->price }})</h1>
<img src="{{ $game->image }}" alt="{{ $game->title }}" class="poster-img">
<p>{{ $game->desc }}</p>

<div class="container">
  <h4>Can be bought in these stores:</h4>
  <div class="container">
    <ul>
      @foreach($game->stores as $store)
      <li>
        {{ $store->name }} {{ $store->city }}
      </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="container">
  <h4>User reviews</h4>
  <div class="container">
    @foreach ($game->ratings as $rating)
      <div class="container card">
        <div class="row">
          <p><h5>{{ $rating->name }} - {{ $rating->rating }} / 5</h5></p>
        </div>
        <div class="row">
          <p>Comment: {{ $rating->comment }}</p>
        </div>
      </div>
    @endforeach
</div>

@endsection
