<form action="/movies/{{ $movie->id }}" method="POST" class="pb-5">
    @method('PATCH')
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Enter a movie title!" value="{{ old('title') ?? $movie->title }}">
    </div>

    <button type="submit" class="btn btn-primary">Save Movie</button>

    <div>{{ $errors->first('title') }}</div>

    @csrf
</form>