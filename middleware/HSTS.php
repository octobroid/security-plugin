<?php namespace Vhiweb\Security\Middleware;

use Closure;
use Illuminate\Http\Request;

class HSTS
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubdomains');

        return $response;
    }
}