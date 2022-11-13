<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if((Auth::user()->role_as == '1')){
                return $next($request);
            }else{
                return redirect('/home')->with('status','Access Denied! As You Are Not An Admin');
            }

        }


    }
}
