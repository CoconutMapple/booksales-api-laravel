<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // ======================
    // ADMIN - READ ALL
    // ======================
    public function index()
    {
        return response()->json(
            Transaction::with(['user', 'book'])->get()
        );
    }

    // ======================
    // CUSTOMER - CREATE
    // ======================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $book = Book::find($validated['book_id']);

        $total = $book->price * $validated['quantity'];

        $transaction = Transaction::create([
            'user_id' => $validated['user_id'],
            'book_id' => $validated['book_id'],
            'quantity' => $validated['quantity'],
            'total_price' => $total
        ]);

        return response()->json($transaction, 201);
    }

    // ======================
    // CUSTOMER - SHOW
    // ======================
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'book'])->find($id);

        if (!$transaction) {
            return response()->json([
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        return response()->json($transaction);
    }

    // ======================
    // CUSTOMER - UPDATE
    // ======================
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $book = Book::find($transaction->book_id);

        $transaction->update([
            'quantity' => $validated['quantity'],
            'total_price' => $book->price * $validated['quantity']
        ]);

        return response()->json($transaction);
    }

    // ======================
    // ADMIN - DELETE
    // ======================
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'message' => 'Transaksi berhasil dihapus'
        ]);
    }
}