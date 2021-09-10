<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		
		if (Auth::user() &&  Auth::user()->user_type == "admin") {
             return $next($request);
        }
		 //return redirect('home')->with('error','You have not admin access');
    }
}
