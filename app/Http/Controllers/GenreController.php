<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of genres.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all genres from Model
        $genres = Genre::getAllGenres();
        
        // Pass data to view
        return view('genres.index', compact('genres'));
    }

    /**
     * Display the specified genre.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Get specific genre by ID
        $genre = Genre::find($id);
        
        if (!$genre) {
            abort(404, 'Genre not found');
        }
        
        return view('genres.show', compact('genre'));
    }
}
