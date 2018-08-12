<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if($request->user() != null){
            $rolesArr = explode(';', $roles);
            if($request->user()->hasAnyRole($rolesArr))
                return $next($request);
        }

        return redirect('/')->with('danger',"You're not authorized to access this page");
    }
}
