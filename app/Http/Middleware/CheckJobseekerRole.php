<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckJobseekerRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return $next($request);
        }
        
        if (Auth::check() && Auth::user()->roles_id == 1) {
            return $next($request);
        }

        if (Auth::check() && Auth::user()->roles_id == 2) {
            return redirect()->route('hirer.home');
        }

        // if (Auth::check() && Auth::user()->roles_id == 3) {
            
        // }

        return redirect()->route('home');
    }
}
