<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            if($request['language']){
             App::setLocale($request['language']);
        }
        else{
            App::setLocale(Config::get('app.locale'));

        }
        
         if ( Session::has('locale') )
            App::setLocale(Session::get('locale'));
        else
            App::setLocale(Config::get('app.locale'));


        return $next($request);
    }
}
