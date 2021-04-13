<style>
    .row {
        text-align: center;
        margin-top: 10%;
    }

    a {
        background-color: #088F8F;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    #delete {
        background-color: #f44336;
        margin-left: 10px;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
    }

    form {
        display: inline-block;
    }
</style>

<div class="row">
    <div class="col-12">
        <h2>{{ $movie->title }}</h2>
        <a href="{{ $movie->id }}/edit">Edit Movie Title</a>

        <form action="{{ $movie->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" id="delete">Delete</button>
        </form>
    </div>
</div>