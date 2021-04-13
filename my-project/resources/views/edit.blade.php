<style>
    .row {
        text-align: center;
        margin-top: 10%;
    }

    #save-button {
        background-color: #088F8F;
        margin-left: 10px;
        margin-top: 30px;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
    }
</style>

<div class="row">
    <div class="col-12">
        <h2>Editing the title: {{ $movie->title }}</h2>
    </div>

    <form action="/movies/{{ $movie->id }}" method="POST" class="pb-5">
        @method('PATCH')
        <div class="form-group">
            <input type="text" name="title" size="50" class="form-control" placeholder="Enter a movie title!" value="{{ old('title') ?? $movie->title }}">
        </div>

        <button type="submit" id="save-button">Save Movie</button>

        <div>{{ $errors->first('title') }}</div>

        @csrf
    </form>
</div>