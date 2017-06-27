<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function login($request, Closure $next)
    {
         if ($request->age <= 20) {
            // 路由命名重定向有问题
            // return redirect('login');
            return back();
        }

        return $next($request);
    }
}
