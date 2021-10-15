<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
       if(Auth::guard($guards)->check()){
        $user_type = Auth::user()->user_type;
        switch ($user_type){
            case 'admin':
                return redirect('/admin');
                break;
            case 'cashier':
                return redirect('/cashier');
                break;
            case 'student':
                return redirect('/student');
                break;
            case 'accountant':
                return redirect('/accountant');
                break;
            case 'cashier':
                return redirect('/cashier');
                break;
            default:
                return redirect('/home');
                break;
            }
       }

        return $next($request);
    }
}
