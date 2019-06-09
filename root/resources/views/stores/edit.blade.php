@extends('layouts.app')

@section('content')

<h1>Edit: {{ $store->name }}</h1>

<form action="{{ route('stores.update', ['store' => $store->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control">
  <label for="name">City</label>
  <input type="text" name="city" id="city" class="form-control">
  <hr>
  <input type="submit" class="btn btn-success" value="Update store">
</form>

@endsection
