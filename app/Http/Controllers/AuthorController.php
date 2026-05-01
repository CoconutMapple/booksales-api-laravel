<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // READ ALL
    public function index()
    {
        return response()->json([
            'message' => 'List author',
            'data' => Author::all()
        ]);
    }

    // CREATE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'bio' => 'nullable|string',
            'nationality' => 'required|string',
            'birth_year' => 'required|integer'
        ]);

        $author = Author::create($validated);

        return response()->json([
            'message' => 'Author berhasil dibuat',
            'data' => $author
        ], 201);
    }

    // SHOW
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'message' => 'Detail author',
            'data' => $author
        ]);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'bio' => 'nullable|string',
            'nationality' => 'sometimes|required|string',
            'birth_year' => 'sometimes|required|integer'
        ]);

        $author->update($validated);

        return response()->json([
            'message' => 'Author berhasil diupdate',
            'data' => $author
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Author tidak ditemukan'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'message' => 'Author berhasil dihapus'
        ]);
    }
}