@extends('layouts.app')

@section('content')

<h1>{{ $game->title }} (€{{ $game->price }})</h1>
<img src="{{ $game->image }}" alt="{{ $game->title }}" class="poster-img">
<p>{{ $game->desc }}</p>

@endsection
