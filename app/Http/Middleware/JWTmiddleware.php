<?php

namespace App\Http\Middleware;

use Closure;

class JWTmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,  $guard = null)
    {
        if($guard == null){
            return response()->json('Get Out!');
        }
        return $next($request);
    }
}
