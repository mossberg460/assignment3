@section('content')
<h1>Edit: {{ $game->title }}</h1>

<form action="{{ route('games.update', ['game' => $game->id]) }}" method="POST">
  @method('PUT')
  <label for="title">Title</label>
  <input type="text" name="title" id="title" class="form-control">
  <label for="price">Price</label>
  <input type="number" name="price" id="price" class="form-control">
  <label for="desc">Title</label>
  <input type="text" name="desc" id="desc" class="form-control">
  <label for="image">Image</label>
  <input type="url" name="image" class="form-control">
  <hr>
  <input type="submit" class="btn btn-success" value="Update game">
</form>

@endsection
