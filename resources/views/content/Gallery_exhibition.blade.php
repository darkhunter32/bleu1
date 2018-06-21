<section class="page-section">
                   <div class="container relative">
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-gut clearfix font-alt hover-white" id="work-grid">
                    <?php $p_cats = App\ExProjectsCat::all()->sortBy('id')->translate(config('global.lang_trans'));?>
                    @foreach($p_cats->filter(function ($item) {
    return $item->name != 'Déco & Scénographie';
}) as $p_cat)
                        <!-- Work Item (Lightbox) item to repeat-->
                        <li class="work-item mix photography">
                            <a href="projects/{{$p_cat->name}}" class=" mfp-image">
                                <div class="work-img">
                                    <img src="{{ Voyager::image( $p_cat->image ) }}" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{$p_cat->name}}</h3>
                                    <div class="work-descr">
                                       <!-- description-->
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        @endforeach
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
                </section>