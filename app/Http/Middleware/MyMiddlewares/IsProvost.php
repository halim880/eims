<?php

namespace App\Http\Middleware\MyMiddlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsProvost
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()!==null) {
            if (Auth::user()->is_provost) {
                return $next($request);
            }
        }
        return abort(403);
    }
}
