<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\AnimeApiController;

//Home
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('anydata', [HomeController::class, 'anyData'])->name('anydata');

//Anime
Route::get('create-anime', [AnimesController::class, 'createAnime'])->name('create-anime');
Route::post('anime-store', [AnimesController::class, 'storeAnime'])->name('anime-store');
Route::get('anime-show/{id}', [AnimesController::class, 'showAnime'])->name('anime-show');
Route::POST('anime-update/{id}', [AnimesController::class, 'updateAnime'])->name('anime-update');  



//API

Route::get('get-animes', [AnimeApiController::class, 'index']);
Route::middleware('api')->group(function () {
    Route::post('store-animes', [AnimeApiController::class, 'storeAnime']);
});
Route::put('update-animes', [AnimeApiController::class, 'update-anime']);
Route::post('delete-animes', [AnimeApiController::class, 'delete-anime']);