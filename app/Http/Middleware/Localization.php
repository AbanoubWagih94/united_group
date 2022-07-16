<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {

        if($guard == 'en') {
            session()->put('locale','en');
            app()->setLocale('en');
            return $next($request);
        } else {
            session()->put('locale','ar');
            app()->setLocale('ar');
            return $next($request);
            
        }
    }
}
