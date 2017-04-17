<?php

namespace App\Http\Middleware;

use Closure;

class HomeCheckLogin
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
        //判断session中是否存在用户信息
        if (!session('phone')){
            return redirect('home/user/login');
        }
        return $next($request);
    }
}
