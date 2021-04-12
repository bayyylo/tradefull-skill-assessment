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

    public function show(Movie $movie)
    {
        return view('show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $movies = Movie::all();
        return view('edit', compact('movie'));
    }

    public function update(Movie $movie)
    {
        $data = request()->validate([
            'title' => 'required|min:5'
        ]);

        $movie->update($data);

        return redirect('/');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/');
    }
}
