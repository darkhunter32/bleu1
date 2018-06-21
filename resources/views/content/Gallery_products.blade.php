<section class="page-section">
<?php $sess=Session::get('lang');
        $current = url()->current();
        $link=url('/');
        if((($sess)&&(strpos($current, url('/').'/fr/') !== false))||(($sess)&&(strpos($current, url('/').'/en/') !== false))||((strpos($current, url('/').'/fr/') !== false))||((strpos($current, url('/').'/en/') !== false)))
        $link=url('/'.Lang::locale().'/');
        ?>

                   <div class="relative">                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                    <?php $cat = App\ExProjectsCat::all()->where('id', '=', $id)->first()->translate(config('global.lang_trans'));?>
                    <?php $s_cats = App\ExProjectsSubcat::all()->where('category', '=', $cat->id)->sortBy('id')->translate(config('global.lang_trans'));?>                   
                        <a href="#" class="filter active cl-effect-14" data-filter="*">All works</a>
                        @foreach($s_cats as $s_cat)
                        <a href="#<?php echo str_replace(' ', '_', $s_cat->name);?>" class="filter cl-effect-14" data-filter=".<?php echo str_replace(' ', '_', $s_cat->name);?>">{{$s_cat->name}}</a>
                        @endforeach
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                    
                    <?php $projects = App\ExProject::all()->translate(config('global.lang_trans'));
                    $key=$cat->id;
                    foreach($projects->filter(function ($item)use($key) {
    return $item->e_cat->e_scat->id == $key;
})  as $project){ if($project->p_d!==1){?>
                        <!-- Work Item (Lightbox) block to duplicate send id related to the slide-->
                        <li class="work-item mix <?php echo str_replace(' ', '_', $project->e_cat->name);?> wow fadeIn" data-wow-delay="0s">                           
                            <a class='iframe group1'  href="{{ $link }}/exhibition/projects/{{ $project->id }}" title="">
                                <div class="work-img">
                                    <img src="{{ Voyager::image( $project->image ) }}" alt="{{$project->name}}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{$project->name}}</h3>
                                    <div class="work-descr">
                                        {{$project->e_exhibition->name}}
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
<?php }; }?>                       
                    </ul>
                <!-- End Works Grid -->                   
                </div>
                </section>