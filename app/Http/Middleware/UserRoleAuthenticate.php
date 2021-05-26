<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserRoleAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, string $user)
    {

        if((Auth::user()->user_type === 'admin' && $user === 'admin')){
            return $next($request);
        }
        if((Auth::user()->user_type === 'user' && $user === 'user')){
            return $next($request);
        }else{
            abort(403, 'Unauthorized');
        }
    }
}
