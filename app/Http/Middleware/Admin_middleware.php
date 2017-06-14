<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;


class Admin_middleware
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
        if(Session::has('admin_name') && Session::has('admin_password'))
        {
            return $next($request);
        }
        else
        {
            return redirect()->back();
        }

    }
}
