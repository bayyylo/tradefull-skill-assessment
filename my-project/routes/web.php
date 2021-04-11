<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'movies');

Route::get('/', 'App\Http\Controllers\MoviesController@list');

Route::post('movies', 'App\Http\Controllers\MoviesController@store');
