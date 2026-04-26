<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of authors.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all authors from database
        $authors = Author::all();
        
        // Pass data to view
        return view('authors.index', compact('authors'));
    }

    /**
     * Display the specified author.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Get specific author by ID with their books
        $author = Author::with('books')->findOrFail($id);
        
        return view('authors.show', compact('author'));
    }
}