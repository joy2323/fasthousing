<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Admin
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
  
          }else{

            $user = Auth::user();
            if($user-> isAdmin==1){
            return redirect('social/admin');
            
            }else{
            
            return redirect ('user');
            
            }
            
            }
            
        
        
    }
}
