<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->age && $request->age < 18) {
            return redirect('noaccess');
        }
        // for grp middleware and route middleware
        //if /users?age=10 it will redirect to noaccess
        //if /home?age=10 it will redirect to noaccess

        return $next($request);
    }
}
