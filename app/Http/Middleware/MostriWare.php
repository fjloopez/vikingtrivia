<?php

namespace App\Http\Middleware;

use Closure;

class MostriWare
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
        if ( !is_object($request->user()) || $request->user()->name != 'MostriWare') {
            return redirect('/');
        }
        return $next($request);
    }
}
