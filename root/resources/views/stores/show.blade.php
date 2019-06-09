@extends('layouts.app')

@section('content')

<h1>{{ $store->name }} (in {{ $store->city }})</h1>

<div class="container">
  <h4>Has the following games for sale:</h4>
  <div class="container">
    <ul>
      @foreach($store->games as $game)
      <li>
        {{ $game->title }} 
      </li>
      @endforeach
    </ul>
  </div>
</div>

@endsection
