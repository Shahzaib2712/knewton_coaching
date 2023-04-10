<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if(session()->has('email')){
            
            if(session()->get('email') == "shahzaib123@gmail.com"){
                
                return $next($request);
            }
            
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
