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
                    
                    <?php $decorations = App\ExProject::all()->translate(config('global.lang_trans'));?>                   
                        <a href="#" class="filter active cl-effect-14" data-filter="*">All works</a>
                        @foreach($decorations as $decoration)
                        @if($decoration->p_d==1)
                        <a href="#<?php echo str_replace(' ', '_', $decoration->name);?>" class="filter cl-effect-14" data-filter=".<?php echo str_replace(' ', '_', $decoration->name);?>">{{$decoration->name}}</a>
                        @endif
                        @endforeach
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                    
                    <?php $decorations = App\ExProject::all()->translate(config('global.lang_trans'));
                    
                    foreach($decorations  as $decoration){
                        if($decoration->p_d==1){ ?>
                        <!-- Work Item (Lightbox) block to duplicate send id related to the slide-->
                        <li class="work-item mix <?php echo str_replace(' ', '_', $decoration->name);?> wow fadeIn" data-wow-delay="0s">                           
                            <a class='iframe group1'  href="{{ $link }}/products/decoration/{{ $decoration->id }}" title="" id="{{ $decoration->id }}">
                                <div class="work-img">
                                    <img src="{{ Voyager::image( $decoration->image ) }}" alt="{{$decoration->name}}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{$decoration->name}}</h3>
                                    <div class="work-descr">
                                        {{$decoration->e_exhibition->name}}
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