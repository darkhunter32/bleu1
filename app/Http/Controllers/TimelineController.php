<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    
        function page ($slug)
        {
            $pages = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans')); 
            return $pages;  
        }
        
    public function filter(Request $request)
    {
        $exhibition = $request->input('exhibition');
        $date_from = $request->input('date_from');
        $date_to= $request->input('date_to');
        $location=$request->input('location');
        $page=page('exhibitor_order'); 
        return view('exhibitor_order', ['exhibition' => $exhibition,'date_from' =>$date_from,'date_to' => $date_to,'location' => $location], compact('page'));
    }
}
