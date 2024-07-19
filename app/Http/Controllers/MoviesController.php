<?php

namespace App\Http\Controllers;
use App\Models\Movie;


use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function showMovies(Request $request){

        $request->validate([
            'mov_id' => 'required|exists:posts,id',
        ]);

        $movie = Movie::where('movie', $request->mov_id)->get();

        $response = [
            'movie' => $movie,
        ];
        return response($response, 201);

    }
    
    public function getMovies(Request $request) {
        $movies = Movie::all();
    
        return response()->json($movies, 200);
    }
}
