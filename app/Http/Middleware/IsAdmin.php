<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::check()){

            if (Auth::user()->IsAdmin()){

                return $next($request);

            }
        }

        return redirect()->back()->with('error','You are not having administrative Permissions');;
    }
}
