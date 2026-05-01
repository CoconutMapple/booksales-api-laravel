<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // READ ALL
    public function index()
    {
        return response()->json([
            'message' => 'List genre',
            'data' => Genre::all()
        ]);
    }

    // CREATE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string'
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'message' => 'Genre berhasil dibuat',
            'data' => $genre
        ], 201);
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

        return response()->json([
            'message' => 'Detail genre',
            'data' => $genre
        ]);
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

        $validated = $request->validate([
            'name' => 'sometimes|required|string'
        ]);

        $genre->update($validated);

        return response()->json([
            'message' => 'Genre berhasil diupdate',
            'data' => $genre
        ]);
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