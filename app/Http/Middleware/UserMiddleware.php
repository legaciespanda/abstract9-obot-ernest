<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserMiddleware
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
		
		//check that user's account has been verified and not admin
		if ((Auth::user()) &&  (Auth::user()->user_type == "user") && (Auth::user()->account_verified == 0)) {
			Auth::logout();
			$request->session()->invalidate();
			$request->session()->regenerateToken();
            return \Redirect::route("unverified");	
        }	
		return $next($request);
		
    }
}
