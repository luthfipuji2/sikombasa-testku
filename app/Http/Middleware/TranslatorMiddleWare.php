<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TranslatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != "klien" && Auth::user()->role != 'translator'){
            return redirect()->to('/admin');
        }elseif(Auth::user()->role != 'translator' && Auth::user()->role != 'admin'){
            return redirect()->to('/klien');
        }
        return $next($request);
    }
}
