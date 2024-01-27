<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\RoleMiddleware as Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
       if(auth()->check() && $request->user()->role ==1)
         return $next ($request);

         else return Redirect('/');
    }  

}
