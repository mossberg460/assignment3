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
    <td>{{ $game->price }}</td>
  </tr>
@endforeach
</table>
@endsection
