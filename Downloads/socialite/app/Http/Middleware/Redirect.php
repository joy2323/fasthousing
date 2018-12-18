<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class Redirect
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
        $user = Auth::user()->user_name; 
         if(Auth::user()->user_name){
            //return redirect()->action('App\Http\Controllers\PostController@showPost');
            return redirect('social/user/'.$user);
         }

         return $next($request);
    }
}


