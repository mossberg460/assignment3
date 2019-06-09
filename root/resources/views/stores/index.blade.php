@extends('layouts.app')

@section('content')

<h1>All stores</h1>
<p>Our stores:</p>
<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>City</th>
  </tr>
@foreach($stores as $store)
  <tr>
    <td>{{ $store->id }}</td>
    <td><a href="{{ route('stores.show', ['stores' => $store->id]) }}">{{ $store->name }}</a></td>
    <td>{{ $store->City }}</td>
    @if(Auth::check())
    <td>
      @csrf
      <a class="btn btn-primary" href="{{ route('stores.edit', ['id' => $store->id]) }}">Edit</a>
    </td>
    <td>
      <form action="{{ route('stores.destroy', ['store' => $store->id]) }}" method="POST">
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
