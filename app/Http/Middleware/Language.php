<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class SetDefaultLocaleForUrls
{
    public function handle($request, Closure $next)
    {
        URL::defaults(['locale' => $request->user()->locale]);
        if(\Session::has('lang')) {
            \App::setLocale(\Session::get('lang'));
        }
        if((strpos($current, url('/').'/fr/') !== false)||(strpos($current, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');

        return $next($request);
    }

}