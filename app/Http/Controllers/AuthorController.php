<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // READ ALL
    public function index()
    {
        return response()->json(Author::all());
    }

    // CREATE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'nationality' => 'required|string',
            'birth_year' => 'required|integer'
        ]);

        $author = Author::create($validated);

        return response()->json($author, 201);
    }
}