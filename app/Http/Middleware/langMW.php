<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\app;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Closure;

class langMW
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

        if(!Session::has('locale')){
                Session::put('locale' , Config::get('app.locale'));
               
        }
        App::setLocale(session('locale'));
        return $next($request);
    }
}
