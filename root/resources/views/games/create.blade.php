@extends('layouts.app')

@section('content')

<h1>Add game</h1>

<form action="{{ route('games.store') }}" method="POST">
  @csrf
  <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control">
  <label for="price">Price</label>
    <input type="number" name="price" id="price" class="form-control">
  <label for="desc">Description</label>
    <input type="text" name="desc" id="desc" class="form-control">
  <label for="image">Image</label>
    <input type="url" name="image" class="form-control">

  <div class="form-group row">
    <h4>Stores</h4>
    <ul>
      @foreach($game->stores as $store)
      <li class="">
        <label for="store_name">{{ $store->name }}</label>
        <input type="checkbox" name="stores[]" value="{{ $store->id }}" autofocus>
      </li>
      @endforeach
    </ul>
  </div>

  <hr>
  <input type="submit" class="btn btn-success" value="Save game">
</form>

@endsection
