@if(($page->title))
<section class="home-section bg-dark-alfa-50 parallax-2 fixed-height-small" data-background="{{ Voyager::image( $page->image ) }}">
                <div class="js-height-parent container">
                    
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            
                            <div class="row">
                        
                                <div class="col-md-8 align-left">
                                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">{{ $page->title }}</h1>
                                    <div class="hs-line-4 font-alt">
                                    {{ $page->small_title }}
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mt-30">
                                    <div class="mod-breadcrumbs font-alt align-right">
                                       /&nbsp;<span>{{ $page->title }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    
                </div>
            </section>
            @endif