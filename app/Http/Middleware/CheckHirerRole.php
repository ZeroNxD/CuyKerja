<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckHirerRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check() && Auth::user()->roles_id == 3) {
            
        // }
        
        if (Auth::check() && Auth::user()->roles_id == 2) {
            return $next($request);
        }

        if (Auth::check() && Auth::user()->roles_id == 1) {
            return redirect()->route('home');
        }

        return redirect('/'); // Pengguna lain diarahkan ke halaman default
    }
}
