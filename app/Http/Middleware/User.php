<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == '3') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == '2') {
            return redirect('/editor');
        }
        else {
            return redirect('/admin');
        }
    }
}
