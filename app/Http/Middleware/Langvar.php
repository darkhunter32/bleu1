<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class Qhyg
{
    public function handle($request, Closure $next)
{
    $c_lang = url()->current();
    if((strpos($c_lang, url('/').'/fr/') !== false)||(strpos($c_lang, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');
    $l_lang='fr';
    if (strpos($c_lang, url('/').'/fr/') !== false)$l_lang='fr';
    if (strpos($c_lang, url('/').'/en/') !== false)$l_lang='en';
    return $next($request);
}
}