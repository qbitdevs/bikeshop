<?php

namespace App\Http\Middleware;

use Closure;

class BikeStore
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        print_r($request->path());
        return $next($request);
    }
}
