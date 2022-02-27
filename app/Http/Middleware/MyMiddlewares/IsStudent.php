<?php

namespace App\Http\Middleware\MyMiddlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsStudent
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
        if (Auth::user()!==null) {
            if (Auth::user()->is_student) {
                return $next($request);
            }
        }
        return abort(403);
    }
}
