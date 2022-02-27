<?php

namespace App\Http\Middleware\MyMiddlewares;

use App\Helpers\UserRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsTeacher
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
            if (Auth::user()->is_teacher) {
                return $next($request);
            }
        }
        return abort(403);
    }
}