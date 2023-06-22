<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            if(Auth::User()->role_as == '1'){
                return $next($request);
            }
             else{
                return redirect('/home')->with('message', 'You are not an admin'); 
            }
        }else{
            return redirect('/home')->with('message', 'Please Login'); 
        }
        
    }
}
