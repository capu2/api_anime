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