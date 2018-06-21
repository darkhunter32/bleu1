<!-- Home Section -->
            <div class="home-section fullscreen-container" >
                <div class="fullscreenbanner bg-dark">
                    <ul>
                    @foreach($fsliders as $slide)
                        <!-- Slide Item -->
                        <li data-transition="fade" data-slotamount="7" data-title="{{ $slide->slide_title }}">
                            
                            <img src="{{ Voyager::image( $slide->image ) }}" alt="{{ $slide->slide_title }}">
                            
                            
                                
                               <div class="caption customin customout tp-resizeme hs-line-8 no-transp font-alt" 
                                   data-x="center" 
                                   data-hoffset="0" 
                                   data-y="center" 
                                   data-voffset="-100" 
                                   data-customin="x:-50;y:-300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                                   data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                   
                                   data-speed="800" 
                                   data-start="800" 
                                   data-startslide="1" 

                                   data-easing="Power4.easeOut" 
                                   data-endspeed="500" 
                                   data-endeasing="Power4.easeIn">
                                    
                                   {{ $slide->title_small }}
                                   
                                </div>
                                
                                <div class="caption customin customout tp-resizeme hs-line-14 font-alt" 
                                   data-x="center" 
                                   data-hoffset="0" 
                                   data-y="center" 
                                   data-voffset="-14" 
                                   data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                   data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                   data-speed="800" 
                                   data-start="1200" 
                                   data-startslide="1" 

                                   data-easing="Power4.easeOut" 
                                   data-endspeed="500" 
                                   data-endeasing="Power4.easeIn">
                                    
                                   {{ $slide->title_big }}
                                
                                </div>
                                
                                
                                <div class="caption customin customout tp-resizeme" 
                                   data-x="center" 
                                   data-hoffset="0" 
                                   data-y="center" 
                                   data-voffset="83" 
                                   data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" 
                                   data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                   data-speed="800" 
                                   data-start="1500" 
                                   data-startslide="1" 


                                   data-easing="Power4.easeOut" 
                                   data-endspeed="500" 
                                   data-endeasing="Power4.easeIn">
                                    
                                   <div class="local-scroll">
                                   @if($slide->link_btn_1)
                                        <a href="{{ $slide->link_btn_1 }}" class="btn btn-mod btn-border-w btn-medium btn-round">
                                        {{ $slide->txt_link1 }}
                                        </a>
                                    @endif
                                        <span>&nbsp;</span>
                                        @if($slide->link_video)
                                        <a href="{{ $slide->link_video }}" class="btn btn-mod btn-border-w btn-medium btn-round lightbox mfp-iframe">{{ $slide->txt_video }}</a>
                                        @endif
                                    </div>
                                   
                                </div>
                                            
                        </li>
                        <!-- End Slide Item -->
                        @endforeach
                        
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div> 
                </div>
            </div>
            <!-- End Home Section -->