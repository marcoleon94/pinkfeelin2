<?php

namespace pinkfeelin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Cart;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
        Cart::destroy();
        return $next($request);
    }
}
