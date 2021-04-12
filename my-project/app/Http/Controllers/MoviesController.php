<?php

namespace App\Http\Controllers;

use App\Models\Movie as Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function list()
    {
        $movies = Movie::all();

        return view('movies', [
            'movies' => $movies
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|min:5'
        ]);

        $movie = new Movie();
        $movie->title = request('title');
        $movie->save();

        return back();
    }
}
