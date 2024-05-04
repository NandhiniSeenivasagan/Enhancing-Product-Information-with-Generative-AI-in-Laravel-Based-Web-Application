<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuppressRouteLogs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route()->named('product.response') || $request->route()->named('product.responsed')) {
            Log::setDefaultDriver('null'); // Assuming you have a 'null' channel that doesn't log anything
        }

        return $next($request);
    }
}
