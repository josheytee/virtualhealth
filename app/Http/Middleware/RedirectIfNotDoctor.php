<?php

namespace VirtualHealth\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth('doctor')->guest()) {
            return redirect()->guest('doctors/login');
        }
        return $next($request);
    }
}
