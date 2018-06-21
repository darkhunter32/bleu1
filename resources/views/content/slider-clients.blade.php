            <style>.bg-dark-alfa-70::before, .bg-dark-alfa-70 .YTPOverlay::before {
 
    background: rgba(17, 17, 17, 0) !important;
}</style>
               <section class="page-section bg-dark-alfa-70"  style="padding: 20px 0 !important; background: white !important">
                <div class="container relative">
                    
                    <!-- Features Grid  To change it go to all.js line 540-->
                    <div class="item-carousel owl-carousel">
                    <?php $logos = App\ClientsLogo::all()->translate(config('global.lang_trans'));?>

                        @foreach($logos as $logo){
                        <!-- Features Item boocle a repeter pour les logos clients-->
                        <div class="features-item">
                            <div class="features-icon">
                            <a href="{{ $logo->link }}"><img src="{{ Voyager::image( $logo->image ) }}"  alt="{{ $logo->name }}"/></a> </div>
                       </div>
                        <!-- End Features Item -->
                        @endforeach
                       
                        
                    </div>
                    <!-- Features Grid -->
                
                </div>
            </section>
           