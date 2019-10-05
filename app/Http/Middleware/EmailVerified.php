<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class EmailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      // if(Auth::user() === null ) {
      //   return redirect(route('login'));
      // }
      $user = Auth::user();

      if( !$user->mobile_verified ) {
        return redirect(route('home'));
      }
      return $next($request);
    }
}
