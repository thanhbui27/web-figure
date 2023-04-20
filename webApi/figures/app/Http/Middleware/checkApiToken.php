<?php

namespace App\Http\Middleware;

use App\Models\accountModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class checkApiToken
{
 

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    

    public function handle(Request $request, Closure $next)
    {
        if($request -> header('Authorization')){
            $token = $request -> header('Authorization');
            $user = DB::table('account') -> select('id_ac') -> where('authToken','=',$token) -> get();
            if(count($user) > 0){
               
                return $next($request);
            }
        }
        return response() -> json(['error' => 'Unauthorized API details','status' => 0],400);
      
    }
}
