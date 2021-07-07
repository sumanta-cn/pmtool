<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Rolecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->role && $request->role===""){
            return redirect(403);
        }
        return $next($request);

    }
}
