<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Multi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, array $guards = ['web', 'admin', 'superadmin', 'user'])
    {
        foreach ($guards as $guard) {
            if (!Auth::guard($guard)->check()) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}