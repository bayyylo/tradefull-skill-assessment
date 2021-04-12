<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'movies');

Route::get('/', 'App\Http\Controllers\MoviesController@list');
Route::post('movies', 'App\Http\Controllers\MoviesController@store');
Route::get('movies/{movie}', 'App\Http\Controllers\MoviesController@show');
Route::get('movies/{movie}/edit', 'App\Http\Controllers\MoviesController@edit');
Route::patch('movies/{movie}', 'App\Http\Controllers\MoviesController@update');
Route::delete('movies/{movie}', 'App\Http\Controllers\MoviesController@destroy');
