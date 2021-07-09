<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Rolecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request,  Closure $next)
    {
        //dd(Auth::user());
        //  echo "<pre>";print_r($request->user);die;
        // if($user->role()->role_name && $user->role()->role_name===""){
        //     return redirect(403);
        // }
        if(!Auth::user() || Auth::user()->role_id==0){
            return redirect(403);
        }
        return $next($request);
    }
}
