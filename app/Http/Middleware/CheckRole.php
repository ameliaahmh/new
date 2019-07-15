<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($guard=='admin') {
            return $next($request);
        } else if($guard =='web') {
            return $next($request);
        }
        return $next($request);
        
    }
}
