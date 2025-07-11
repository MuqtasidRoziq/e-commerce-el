<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $guard = $guards[0] ?? null;

        if (auth($guard)->check()) {
            $user = auth($guard)->user();

            // Redirect berdasarkan role
            return redirect($user->role === 'admin' ? route('dashboard') : route('home'));
        }
        return $next($request);
    }
}
