 <div class="home-section fullwidth-slider bg-dark" id="home">
           
@foreach($fsliders as $slide)
                <!-- Slide Item -->
                <section class="home-section bg-scroll bg-dark-alfa-30" data-background="{{ Voyager::image( $slide->image ) }}">
                    <div class="js-height-full container">
                        
                        <!-- Hero Content -->
                        <div class="home-content">
                            <div class="home-text">
                                
                                <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                                {{ $slide->title_small }}
                                </h1>
                                
                                <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                                {{ $slide->title_big }}
                                </h2>
                                
                                <div class="local-scroll">
                                @if($slide->link_btn_1)
                                <a href="{{ $slide->link_btn_1 }}" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">{{ $slide->txt_link1 }}</a>
                                   <span class="hidden-xs">&nbsp;</span>
                                    @endif
                                @if($slide->link_btn_2)
                                <a href="{{ $slide->link_btn_2 }}" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">{{ $slide->txt_link2 }}</a>
                                   <span class="hidden-xs">&nbsp;</span>
                                    @endif
                                    @if($slide->link_video)
                                    <a href="{{ $slide->link_video }}" class="btn btn-mod btn-border-w btn-medium btn-round lightbox mfp-iframe">{{ $slide->txt_video }}</a>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Hero Content -->
                        
                    </div>
                </section>
                <!-- End Slide Item -->
                @endforeach
                
               
            
            </div>