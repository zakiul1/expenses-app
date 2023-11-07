<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Check if the user has the specified role
            if (auth()->user()->role->name === $role) {
                return $next($request);
            }
        }

        // Redirect unauthorized users or display an error message
        abort(403, 'Unauthorized');
    }
}
