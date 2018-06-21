<!-- Section -->
            <section class="page-section bg-dark-alfa-70" data-background="{{ Voyager::image( $page->image ) }}">
                <div class="container relative">
                    
                    <!-- Features Grid -->
                    <div class=" clearlist salon owl-carousel">
                    <?php $exhibitions = App\Exhibition::all()->sortByDesc('id')->translate(config('global.lang_trans'));$delay=0; ?>

                   @foreach($exhibitions->filter(function ($item) {
    return \Carbon\Carbon::parse($item->from)->format('Y') == date("Y");
}) as $exhibition)
                    <?php $delay=$delay+0.3;?>
                        <!-- Features Item  block to repate for all exhibitions delay must be calculated in a boucle-->
                        <div class="features-item wow fadeInUp" data-wow-delay="{{$delay}}s" >
                           <img src="{{ Voyager::image( $exhibition->image ) }}" width="100%" alt=""/> 
                            <div style="background-color: white;color: black; position: relative;margin-bottom: 0px;min-height: 120px; vertical-align: middle;padding:10px;text-transform: uppercase;
">
                          {{ $exhibition->name }}
                          </div>
                          <div style="background-color: black;color: white; position: relative;margin-bottom: 0px;height: 30px; vertical-align: middle;">
                             {{ \Carbon\Carbon::parse($exhibition->from)->format('d-m')}} / {{ \Carbon\Carbon::parse($exhibition->to)->format('d/m')}}
                          </div>
                        </div>
                        <!-- End Features Item -->
                        @endforeach
                        
                        
                    </div>
                    <div class="mt-40" style="float:right; background:rgba(235, 181, 31, 0.9) !important">
                                    <a href="/exhibitor_order" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">exhibitor order</a>
                                </div>  
                    <!-- Features Grid -->
                
                </div>
            </section>
            <!-- End Section -->