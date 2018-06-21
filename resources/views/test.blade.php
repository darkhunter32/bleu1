<?php //var_dump($fsliders);
/*echo $fsliders['id'];
echo $fsliders['page'];
echo $fsliders['title_small']; 

@foreach($fsliders as $slide)
////<br>
{{ $slide->title_small }}
<?php //var_dump($slide);?>
@endforeach
<?php $exhibitions = App\Project::with('exhibition_f')->get()->sortByDesc('id')->groupBy('exhibition');$ind=0;?>
@foreach($exhibitions as $exb)
{{ $exb[0]->exhibition_f->name }}

 @endforeach
*/
?>


 <?php /*$projects = App\Project::with('exhibition_f')->get()->where('name', '=', 'project1');

                    @foreach($projects as $project)
                    @foreach(json_decode($project->gallery) as $pr)
                    <img src="{{ Voyager::image( $pr ) }}" />
                    
                    @endforeach
                         @endforeach
                         <?php //dump($projects );?>

                         <?php $categories = App\ProductSubcategory::all()->where('category', '=', 4)->sortBy('id');?>
                @foreach($categories as $category)
                <?php $sub_categories = App\ProductSubSubcategoory::all()->where('sub_category', '=', $category->id)->sortBy('id');?>
                @foreach($sub_categories as $s_cat)
                <?php dump( $s_cat->s_s_cat)?>
                @endforeach
                @endforeach*/
?>

<?php /*$collection = collect([1, 2, 3, 4]);

$s_cats = App\ExProject::all()->sortBy('id'); dump($s_cats[0]->e_cat->e_scat->id);*/

?>
<?php
/*$users = App\Product::with(['posts' => function ($query) {
    $query->where('title', 'like', '%first%');
}])->get();*/

/*$igs = App\Product::all();
foreach($igs as $ig)
dump($ig->pr->s_s_cat->s_cat->id);


$products = App\Product::
                        with(['pr.s_s_cat.s_cat' => function ($query) {
                            $query->where('id', '=', '4');
                        }])
                        ->where('description', 'LIKE', "%mod%")

                        ->get();
dump($products);*/
//echo phpversion();
/*for translation 
add traslatable to each module(bread)
add each translatable field translatable(see computers as reference)
in config app enable multilangual(set it to true)
 to get the desired translation use the following*/


/*$post = App\Computer::first()->translate('fr');
echo $post->name;
echo $post->desc;

$post = App\Computer::first()->translate('en');
echo $post->name;
echo $post->desc;
//echo Lang::locale();
//App::setLocale('en');
use Illuminate\Http\Request;
//echo Lang::locale();
//Session::put('lang', 'fr');

//App::setLocale(Session::get('lang'));
/*echo Lang::locale();
echo url()->current();
echo url()->full();
echo url()->previous();
//$test=back();
//echo $test->url;
$test=url()->previous();
echo str_replace("/en/","/fr/",url()->previous());
dump(back());*/
/*if(\Request::is('/en/*'))echo 'rrrrrrrrrrrr';

$link = url()->current();

if (strpos($link, url('/').'/en/') !== false) {
    echo 'true';
}
$link = url()->current();
$new_link=url()->previous();
/*if ((strpos($link, url('/').'/en/') == false)&&(strpos($link, url('/').'/fr/') == false)) {
    $new_link=str_replace(url('/'),url('/')."/fr",url()->previous());
    echo $new_link;
}*/
/*$test=url('/').'/en/';
echo strpos($link, $test);
if ((strpos($link, url('/').'/en/') === 0)) {
    //$new_link=str_replace(url('/'),url('/')."/fr",url()->previous());
    echo 'in';
}*/
/*$haystack = url()->current();
$needle   = url('/').'/en/';

if( strpos( $haystack, $needle ) !== false ) {
    echo "\"bar\" exists in the haystack variable";
}else echo 'not in';*/

/*$haystack = url()->previous();
        $needle   = url('/').'/en/';
        $needle2   = url('/').'/fr/';
        
        if(( strpos( $haystack, $needle ) !== false )||( strpos( $haystack, $needle2 ) !== false )) {
            echo "\"needle\" exists in the haystack variable";
        }else echo 'needle doesnt exist';

//else echo 'fffffffffffffff';
/*Lang::setLocale() only changes the locale in the currently loaded translation service.

App::setLocale() changes the currently loaded configuration value and calls Lang::setLocale() to update the translation service. Also, App::setLocale() fires a locale.changed event.*/
/*$current = url()->current();
if((strpos($current, url('/').'/fr/') !== false)||(strpos($current, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');
 $title='GROUPE MAGHREB EXPO'; 
 
 $lang='fr';
 if (strpos($current, url('/').'/fr/') !== false)$lang='fr';
 if (strpos($current, url('/').'/en/') !== false)$lang='en';
 $page = TCG\Voyager\Models\Page::where('id', '=', 3)->first()->translate($lang);
echo $page->title;
echo Lang::locale();*/


/*if (!function_exists('page')) {
    function page ($slug)
    {
        $c_lang = url()->current();
if((strpos($c_lang, url('/').'/fr/') !== false)||(strpos($c_lang, url('/').'/en/') !== false)) echo '';else \App::setLocale('fr');
        $pages = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans'));
        
        return $pages;  
    }
    }
    $page=page('contact');
    dump($page);*/
    /*$projects = App\ExProject::all()->translate(config('global.lang_trans'));
    dump($projects);
    $project = App\ExProject::all()->where('name', '=', 'Groupe Holmarcom')->first();
    dump($project);*/
 ?>
 <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));
 dump($constant[0]->constant);
 dump($constant[1]->constant);
 
 ?>

       
