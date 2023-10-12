<?php namespace Vhiweb\Security\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlwaysAcceptJson
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}