<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckAdmin
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
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }else{
            if(Auth::user()->role >= 1) {
                return $next($request);
            }else{
                return redirect()->route('admin.login')->with('msg','Không có quyền truy cập');
            }
        }
    }
}
