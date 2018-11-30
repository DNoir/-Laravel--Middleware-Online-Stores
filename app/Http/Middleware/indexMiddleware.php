<?php

namespace App\Http\Middleware;

use Closure;

class indexMiddleware
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
        if(!empty($request->cookie('nama')))
            return redirect('/list');
        else{
            return $next($request);
        }
    }
}
