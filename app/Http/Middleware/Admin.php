<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if ($user->roles == 'admin') {
            if ($request->is('admin*')) {
                return $next($request);
            }
            return redirect('/admin');
        }

        if ($user->roles == 'user') {
            if ($request->is('admin*')) {
                return redirect('/');
            }
            return $next($request);
        }

        return abort(403, 'Unauthorized');
        
    }
}
