<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
if (!function_exists('page')) {
    function page ($slug)
    {
        $c_lang = base_url()->current();
if((strpos($c_lang, url('/').'/fr/') !== false)||(strpos($c_lang, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');
        $pages = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans'));
        
        return $pages;  
    }
    }
    if (!function_exists('slider')) {
        function slider ($slug)
        {
            $c_lang = base_url()->current();
if((strpos($c_lang, url('/').'/fr/') !== false)||(strpos($c_lang, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');
            $page = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans'));
            $fsliders = App\FSlider::all()->where('page', '=', $page->id)->sortByDesc('id')->translate(config('global.lang_trans')); 
            return $fsliders;  
        }
        }

$pages = TCG\Voyager\Models\Page::all()->where('w_slider', '=', 1);
foreach($pages as $page){
    $slug=$page->slug;
Route::get('/'.$page->slug, function () use ($slug) {
    $fsliders = slider($slug);
    $page=page($slug);
    return view($slug, compact('fsliders','page'));
});
}

$pages_ns = TCG\Voyager\Models\Page::all()->where('w_slider', '=', 0);
foreach($pages_ns as $page){
    $slug=$page->slug;
Route::get('/'.$page->slug, function () use ($slug) {
    $page=page($slug);
    return view($slug, compact('page'));
});
}

Route::get('/', function () {
    $fsliders = slider('home'); 
    $page=page('home');  
    return view('home', compact('fsliders','page'));
});


//routes for top menu
Route::get('IG/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('GI/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('AV/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('audio-visuel-and-eclairage');
    $page=page('audio-visuel-and-eclairage');
    return view('audio-visuel-and-eclairage', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('VA/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('audio-visuel-and-eclairage');
    $page=page('audio-visuel-and-eclairage');
    return view('audio-visuel-and-eclairage', compact('fsliders','page'),['li_id' => $id]);
});

Route::get('projects/{cat}/{id}', function ($c,$i) {
    $fsliders = slider('e_projects');
    $page=page('e_projects');
    return view('e_products', compact('fsliders','page'),['cat' => $c,'id' => $i]);
});

Route::get('DE/{cat}/{de_id}', function ($c,$i) {
    $fsliders = slider('decoration');
    $page=page('decoration');
    return view('decoration', compact('fsliders','page'),['cat' => $c,'de_id' => $i]);
});

Route::get('LMA/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('FAR/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
//ENd routes for top menu

Route::get('project/{project}', function ($p) {
  
    return view('project', ['project' => $p]);
});


Route::get('exhibition/projects/{project_id}', function ($p) {
    return view('e_project', ['project_id' => $p]);
});

Route::get('/e_products', function () {
    return view('e_products');
});

Route::get('/{locale}/e_products', function () {
    return view('e_products');
});

Route::get('projects/{cat}', function ($c) {
    $fsliders = slider('e_projects');
    $page=page('e_projects');
    return view('e_products', compact('fsliders','page'),['cat' => $c]);
});

$pages_product = TCG\Voyager\Models\Page::all()->where('abreviation', 'LIKE', 'IG');
foreach($pages_product as $p_product){
Route::get('products/{supcat}/{cat}/{subcat}', function ($s,$c,$sc) use($p_product){
    $sl=$p_product->abreviation.'_products';
    $fsliders = slider($sl);
    $page=page($sl);
    return view('ig_products', compact('fsliders','page'),['cat' => $c,'subcat' => $sc]);
});

}

Route::get('products/decoration/{project_id}', function ($p) {
  
    return view('e_project', ['project_id' => $p]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/exhibition_info/{id}', function ($e) {
    return view('exhibition_info', ['id' => $e]);

});


Route::post('/exhibitor_order', 'TimelineController@filter');

Route::post('/request_for_proposal', 'RfpController@filter');

Route::get('/request_for_proposal/{exb}/{ct}', function ($e,$c) {
    $fsliders = slider("request_for_proposal");
    $page=page("request_for_proposal");
    return view('/request_for_proposal', compact('fsliders','page'), ['exb' => $e,'ct' => $c]);

});

Route::get('/refereshcapcha', 'RefereshCapcha@refereshCapchaS');

Route::post('/newsletter', 'ControllerNewsletter@filter');
//need online test
//Route::post('/{locale}/newsletter', 'ControllerNewsletter@filter');

//search works
Route::post('search', ['as' => 'search', 'uses' => 'SearchController@index']);
Route::get('/search', function () use ($slug) {
    $page=page('search');
    return view('search', compact('page'));
});

//comment
Route::get('/test', function (Request $request) {
    return view('test');
});

Route::get('/{local}','LangController@setlanguage');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        $fsliders = slider('home'); 
        $page=page('home');  
        return view('home', compact('fsliders','page'));
    });
   
    Route::get('/en', function() {
        return redirect('en/home');
    });
    $pages = TCG\Voyager\Models\Page::all()->where('w_slider', '=', 1);
    foreach($pages as $page){
        $slug=$page->slug;
    Route::get('/'.$page->slug, function () use ($slug) {
        $fsliders = slider($slug);
        $page=page($slug);
        return view($slug, compact('fsliders','page'));
    });
    }
    $pages_ns = TCG\Voyager\Models\Page::all()->where('w_slider', '=', 0);
    foreach($pages_ns as $page){
        $slug=$page->slug;
    Route::get('/'.$page->slug, function () use ($slug) {
        $page=page($slug);
        return view($slug, compact('page'));
    });
    }

	Route::get('project/{project}', function ($p) {
  
        return view('project', ['project' => $p]);
    });
    Route::get('exhibition/projects/{project_id}', function ($p) {
        return view('e_project', ['project_id' => $p]);
    });
    Route::get('/e_products', function () {
        return view('e_products');
    });
    
    Route::get('/{locale}/e_products', function () {
        return view('e_products');
    });
    
    Route::get('projects/{cat}', function ($c) {
        $fsliders = slider('e_projects');
        $page=page('e_projects');
        return view('e_products', compact('fsliders','page'),['cat' => $c]);
    });
    $pages_product = TCG\Voyager\Models\Page::all()->where('abreviation', 'LIKE', 'IG');
    foreach($pages_product as $p_product){
    Route::get('products/{supcat}/{cat}/{subcat}', function ($s,$c,$sc) use($p_product){
        $sl=$p_product->abreviation.'_products';
        $fsliders = slider($sl);
        $page=page($sl);
        return view('ig_products', compact('fsliders','page'),['cat' => $c,'subcat' => $sc]);
    });
    }
    
    Route::get('products/decoration/{project_id}', function ($p) {
      
        return view('e_project', ['project_id' => $p]);
    });
   
    Route::get('/exhibition_info/{id}', function ($e) {
        return view('exhibition_info', ['id' => $e]);
    
    });
 
    Route::post('/exhibitor_order', 'TimelineController@filter');
   
    Route::post('/request_for_proposal', 'RfpController@filter');
    
    Route::get('/request_for_proposal/{exb}/{ct}', function ($e,$c) {
        $fsliders = slider("request_for_proposal");
        $page=page("request_for_proposal");
        return view('/request_for_proposal', compact('fsliders','page'), ['exb' => $e,'ct' => $c]);
    
    });
    
    Route::get('/refereshcapcha', 'RefereshCapcha@refereshCapchaS');
    
    Route::post('/newsletter', 'ControllerNewsletter@filter');

    Route::post('search', ['as' => 'search', 'uses' => 'SearchController@index']);
Route::get('/search', function () use ($slug) {
    $page=page('search');
    return view('search', compact('page'));
});
    //comment
    Route::get('/test', function (Request $request) {
        return view('test');
    });
    //routes for top menu
Route::get('IG/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('GI/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('AV/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('audio-visuel-and-eclairage');
    $page=page('audio-visuel-and-eclairage');
    return view('audio-visuel-and-eclairage', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('VA/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('audio-visuel-and-eclairage');
    $page=page('audio-visuel-and-eclairage');
    return view('audio-visuel-and-eclairage', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('projects/{cat}/{id}', function ($c,$i) {
    $fsliders = slider('e_projects');
    $page=page('e_projects');
    return view('e_products', compact('fsliders','page'),['cat' => $c,'id' => $i]);
});

Route::get('DE/{cat}/{de_id}', function ($c,$i) {
    $fsliders = slider('decoration');
    $page=page('decoration');
    return view('decoration', compact('fsliders','page'),['cat' => $c,'de_id' => $i]);
});
Route::get('LMA/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
Route::get('FAR/{sub_cat}/{li_id}', function ($sub_cat,$id){
    $fsliders = slider('installation_generale');
    $page=page('installation_generale');
    return view('installation_generale', compact('fsliders','page'),['li_id' => $id]);
});
//End menu top
});




