<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // READ ALL
    public function index()
    {
        return response()->json(Genre::all());
    }

    // CREATE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string'
        ]);

        $genre = Genre::create($validated);

        return response()->json($genre, 201);
    }

    // SHOW
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        return response()->json($genre);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        $genre->update($request->all());

        return response()->json($genre);
    }

    // DELETE
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Genre tidak ditemukan'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'message' => 'Genre berhasil dihapus'
        ]);
    }
}