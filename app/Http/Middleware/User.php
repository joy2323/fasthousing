<?php

namespace App\Http\Middleware;
use Admin;
use Closure;
use Auth;

class User
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

        if(!Auth::check()){
            return redirect('/login');
            }
            else{
                $user = Auth::user()->isAdmin;
                if($user==0){
                    return $next($request);
                }
                else{
                    return redirect('admin/dashboard');
                }
            }

    }
}
