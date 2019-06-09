@extends('layouts.app')

@section('content')

<h1>Add store</h1>

<form action="{{ route('stores.store') }}" method="POST">
  @csrf
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control">
  <label for="name">City</label>
  <input type="text" name="city" id="city" class="form-control">
  <hr>
  <input type="submit" class="btn btn-success" value="Save store">
</form>

@endsection
