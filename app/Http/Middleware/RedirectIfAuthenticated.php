<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // autenticar administrador
            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect()->route('admin.index');
            }
            else{
                if (Auth::guard($guard)->check()) {
                    return redirect()->to('/');
                }
            }
        }

        return $next($request);
    }
}
