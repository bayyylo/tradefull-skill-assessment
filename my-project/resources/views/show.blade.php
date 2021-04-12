<div class="row">
    <div class="col-12">
        <h1>Details for {{ $movie->title }}</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Movie Title: </strong>{{ $movie->title }}</p>
        <a href="{{ $movie->id }}/edit">Edit Movie Title</a>

        <form action="{{ $movie->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit">Delete</button>
        </form>
    </div>
</div>