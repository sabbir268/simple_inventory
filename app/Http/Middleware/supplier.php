<?php

namespace App\Http\Middleware;

use Closure;

class supplier
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
        if(auth()->user()->role == 'supplier'){
            return $next($request);
        }else{
            abort(401, 'UNAUTHORIZED!');
        }
    }
}
