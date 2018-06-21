<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\ProductSubcategory;
use App\ProductSubSubcategoory;
use App\Product;
use App\ExProject;
use App\ExProjectsSubcat;
use App\ExProjectsCat;
use App\Service;

class SearchController extends Controller
{
    function page ($slug)
        {
            $pages = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans')); 
            return $pages;  
        }
    public function index(Request $request)
    {
        $query = $request->get('query');

        $pages = Page::where('title', 'LIKE', "%$query%")->where('listed', '=', "1")
                        ->orWhere('slug', 'LIKE', "%$query%")->where('listed', '=', "1")
                        ->get()
                        ->translate(config('global.lang_trans'));
        $pm1 = ProductSubcategory::where('p_subcategories', 'LIKE', "%$query%")->whereIn('category',array(4,10,20))
                                   ->get()
                                   ->translate(config('global.lang_trans'));
        $pms1 = ProductSubSubcategoory::with(['s_s_cat.s_cat' => function ($query) {
                                        $query->whereIn('id',array('4','10',20));
                                    }])
                                    ->where('name', 'LIKE', "%$query%")
                                   ->get()
                                   ->translate(config('global.lang_trans'));
        $pmp1 = Product::
                                   with(['pr.s_s_cat.s_cat' => function ($query) {
                                       $query->whereIn('id',array('4','10',20));
                                   }])
                                   ->where('description', 'LIKE', "%$query%")      //add name product     
                                   ->get()
                                   ->translate(config('global.lang_trans'));
        $pm2 = ExProjectsCat::where('name', 'LIKE', "%$query%")->where('id', '!=', 6)
                               ->get()
                               ->translate(config('global.lang_trans'));
        $pms2 = ExProjectsSubcat::where('name', 'LIKE', "%$query%")->where('category', '!=', 6)
                               ->get()
                               ->translate(config('global.lang_trans'));
        $pmp2 = ExProject::where('description', 'LIKE', "%$query%")->where('category', '!=', 4)
                           ->orWhere('name', 'LIKE', "%$query%")->where('category', '!=', 4) 
                           ->orWhere('client', 'LIKE', "%$query%")->where('category', '!=', 4)        
                           ->get()
                           ->translate(config('global.lang_trans'));
        $pmp3 = ExProject::where('description', 'LIKE', "%$query%")->where('category', '=', 4)
                           ->orWhere('name', 'LIKE', "%$query%")->where('category', '=', 4)         
                           ->get()
                           ->translate(config('global.lang_trans'));
        $services = Service::where('service', 'LIKE', "%$query%")
                           ->orWhere('txt', 'LIKE', "%$query%")         
                           ->get()
                           ->translate(config('global.lang_trans'));
        $page=page('search');                  
        return view('results', compact('pages', 'pm1', 'pms1', 'pmp1','pmp2','pms2','pm2','pmp3' ,'services','page','query'));
    }   
}
