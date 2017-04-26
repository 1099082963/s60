<?php

namespace App\Http\Middleware;

use App\Model\Reader;
use App\Model\User;
use App\Permission;
use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Rbac
{
    use Authorizable;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = \App\User::where('phone',session('name'))->get()[0]->id;
        $route = Route::current()->uri();
        $user =\App\User::find($id);
//        dd($user->can($route));
        if(!$user->can($route)){
            return back();
        }
        return $next($request);
    }


}
