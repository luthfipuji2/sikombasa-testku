<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   // protected $redirectTo = '/klien';

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != "admin" && Auth::user()->role != 'translator'){
            return redirect()->to('/klien');
        }elseif(Auth::user()->role != "admin" && Auth::user()->role != 'klien'){
            return redirect()->to('/translator');
        }
        return $next($request);
    }
}
