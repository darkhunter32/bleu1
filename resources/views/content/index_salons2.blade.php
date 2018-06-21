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
<style>
.rpn:link{text-decoration:none;
font-size:12px;text-transform:CAPITALIZE; color:white}
.rpn:hover{ color:#010101}
.rpn:visited{ color:white}

</style>
<h2 style="font-size: 14px;width: 100%;color: rgb(55, 55, 55);font-weight: bold;text-align: left;border-left: 3px solid;padding-left: 20px;">{{ $exhibition->name }}</h2>   
<h2 style="font-size: 12px;width: 100%;color: #d87c0a;font-weight: bold;text-align: left;border-left: 3px solid;padding-left: 20px;">{{ \Carbon\Carbon::parse($exhibition->from)->format('d-m')}} / {{ \Carbon\Carbon::parse($exhibition->to)->format('d-m')}}</h2>
<a href="/request_for_proposal/{{ $exhibition->name }}/{{ $exhibition->city_e->name }}" style="" class="rpn"><div class="read_more"  style="position:relative;background: #5a462d;max-width: 160px;
    padding: 5px;" >Request for proposal</div></a>
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