<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

// ======================
// CUSTOMER
// ======================
Route::middleware('customer')->group(function () {
    Route::post('/transactions', [TransactionController::class, 'store']);
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);
    Route::put('/transactions/{id}', [TransactionController::class, 'update']);
});

// ======================
// ADMIN
// ======================
Route::middleware('admin')->group(function () {
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']);
});