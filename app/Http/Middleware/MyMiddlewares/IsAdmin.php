<?php

namespace App\Http\Middleware\MyMiddlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (!is_null(Auth::user())) {
            if(Auth::user()->is_admin){
                return $next($request);
            }
        }
        return abort(403);
    }
}
