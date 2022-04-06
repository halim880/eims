<?php

namespace App\Http\Middleware\MyMiddlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsDataEntry
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->is_data_entry){
            return $next($request);
        }
        else abort(403);
    }
}
