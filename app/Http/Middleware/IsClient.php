<?php

namespace App\Http\Middleware;

use Closure;

class IsClient
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
        if (isset(\Auth::user()->activation)){
        // if ( \Auth::user()->user_type == 1 ){
            return $next($request);
        }else{
            return redirect ('login');
        }
    }
}
