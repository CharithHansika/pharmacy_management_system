<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class AfterLoginRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }



    public function handle($request, Closure $next)
{
    if (Auth::check() && $request->routeIs('login')) {
        return redirect()->intended('home'); // Redirect to intended route or dashboard
    }

    return $next($request);
}

}
