<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::Post('/allMovies',[MoviesController::class,'getMovies']);
    Route::Post('/allMovies/{movie}',[MoviesController::class,'getMovie']);
    Route::Post('/getDirector',[DirectorsController::class,'getDirector']);
    Route::Post('/getActor',[ActorsController::class,'getActor']);
    Route::Post('/allMovies/{genre}',[MoviesController::class,'getMovieGenre']);
});
