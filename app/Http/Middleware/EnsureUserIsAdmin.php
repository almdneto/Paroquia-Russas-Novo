<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if ((int) $request->user()?->access_level !== 1) {
            return redirect()->route('error');
        }

        return $next($request);
    }
}
