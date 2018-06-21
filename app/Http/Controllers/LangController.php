<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Session;

class LangController extends Controller
{
    public function setlanguage(Request $request)
    {
        \Session::put('lang', $request->local);

        $link = url()->current();

        if (strpos($link, url('/').'/en/') !== false) {
            \Session::put('lang', 'en');
        }
        if (strpos($link, url('/').'/fr/') !== false) {
            \Session::put('lang', 'fr');
        }
         $new_link=url()->previous();
       

       
        if($request->local=='fr')$new_link=str_replace("/en/","/fr/",url()->previous());
        if($request->local=='en')$new_link=str_replace("/fr/","/en/",url()->previous());
     
        $haystack = url()->previous();
        $needle   = url('/').'/en/';
        $needle2   = url('/').'/fr/';
        
        if(( strpos( $haystack, $needle ) !== false )||( strpos( $haystack, $needle2 ) !== false )) {
            //echo "\"bar\" exists in the haystack variable";
        }else $new_link=str_replace(url('/'),url('/')."/".$request->local,url()->previous());

        return redirect($new_link);
    }
}
