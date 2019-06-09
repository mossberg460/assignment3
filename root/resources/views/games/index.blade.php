@extends('layouts.app')

@section('content')

<h1>All games</h1>
<p>Here are the games:</p>
<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Price</th>
  </tr>
@foreach($games as $game)
  <tr>
    <td>{{ $game->id }}</td>
    <td><a href="{{ route('games.show', ['games' => $game->id]) }}">{{ $game->title }}</a></td>
    <td>€{{ $game->price }}</td>
    @if(Auth::check())
    <td>
      @csrf
      <a class="btn btn-primary" href="{{ route('games.edit', ['id' => $game->id]) }}">Edit</a>
    </td>
    <td>
      <form action="{{ route('games.destroy', ['game' => $game->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" class="btn btn-danger" value="Delete">
      </form>
    </td>
    @endif
  </tr>
@endforeach
</table>

@endsection
