<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAdmin
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
        if(session('quyen') === 0 ){
            return $next($request);
        }
        if(!session('quyen')){
            return redirect() -> back();
        }
        if(session('quyen') !== 0 ){
            return redirect('home');
        }
          
    }
}
