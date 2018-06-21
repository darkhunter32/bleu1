<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class ControllerNewsletter extends Controller
{
    function page ($slug)
        {
            $pages = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans')); 
            return $pages;  
        }
    public function filter(Request $request)
    {
    DB::table('newsletter')->insert(
        [
        'email'=> $request->input('Email'),
        'ip_ra'=>$_SERVER['REMOTE_ADDR'],
        
        ]
    );
    $constants = App\CTranslate::all()->translate(config('global.lang_trans'));
    $error='<div class="alert alert-success" >'.$constants[17]->constant.' </div>'.$_SERVER['REMOTE_ADDR'];
    $page=page('newsletter'); 
          return view('newsletter', ['error' => $error],compact('page'));
}
}
