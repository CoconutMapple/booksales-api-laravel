<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

// Home route (Laravel default welcome page)
Route::get('/', function () {
    return view('welcome');
});

// Genre routes
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{id}', [GenreController::class, 'show'])->name('genres.show');

// Author routes
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');
