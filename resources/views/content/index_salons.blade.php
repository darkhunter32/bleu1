<!-- Section -->
            <section class="page-section bg-dark-alfa-70" data-background="{{ Voyager::image( $page->image ) }}">
                <div class="container relative">
                    
                    <!-- Features Grid -->
                    <div class=" clearlist salon owl-carousel">
                    <?php $exhibitions = App\Exhibition::all()->sortByDesc('id')->translate(config('global.lang_trans'));$delay=0; ?>

                    @foreach($exhibitions as $exhibition)
                    <?php $delay=$delay+0.3;?>
                        <!-- Features Item  block to repate for all exhibitions delay must be calculated in a boucle-->
                        <div class="features-item wow fadeInUp" data-wow-delay="{{$delay}}s" >
                           <img src="{{ Voyager::image( $exhibition->image ) }}" width="100%" alt=""/> 
                            <div style="background-color: black;color: white; position: relative;margin-bottom: 0px;height: 75px; vertical-align: middle">
                            <div style="background-color: white;color: black;position: relative;bottom: 0;height: 75px;width: 40px; display: inline-block; padding: 10px;font-weight: bold; float: left; font-size: 16px;text-align: center; line-height: 18px">
                            {{ \Carbon\Carbon::parse($exhibition->from)->format('d')}}
                            </br>/</br>{{ \Carbon\Carbon::parse($exhibition->from)->format('m')}}</div><div style="padding-left: 10px; font-weight: 400; padding-top: 10px" class="uppercase">{{ $exhibition->name }}
                            </div></div>
                        </div>
                        <!-- End Features Item -->
                        @endforeach
                        
                        
                    </div>

                    <!-- Features Grid -->
                
                </div>
            </section>
            <!-- End Section -->