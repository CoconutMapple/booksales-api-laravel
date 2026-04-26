<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of books.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all books from database with author relationship
        $books = Book::with('author')->get();
        
        // Pass data to view
        return view('books.index', compact('books'));
    }

    /**
     * Display the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Get specific book by ID with author
        $book = Book::with('author')->findOrFail($id);
        
        return view('books.show', compact('book'));
    }
}