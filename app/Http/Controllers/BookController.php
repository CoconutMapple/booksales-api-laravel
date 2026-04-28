<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function show($id)
    {
        return response()->json(Book::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'genre_id' => 'required|integer'
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy($id)
    {
        Book::destroy($id);

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}