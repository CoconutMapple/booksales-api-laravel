<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('role') !== 'customer') {
            return response()->json([
                'message' => 'Akses hanya untuk customer'
            ], 403);
        }

        return $next($request);
    }
}