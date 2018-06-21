 <!-- Section -->
            <section class="page-section" style="background-color: #f4f4f4">
            <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-md-7 mb-sm-40 wow fadeInLeft">
                            
                            <!-- Video Presentation ME -->
                            <div class="video">
                                <iframe width="640" height="360" src="https://www.youtube.com/embed/oNOWn5R_soI" allowfullscreen></iframe>
                               
                            </div>
                            <!-- End Video Presentation ME  -->
                            
                        </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1 wow fadeInRight">
                            
                            <!-- About Project -->
                            <div class="text">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">{{ $page->title }}</h3>
                                
                                {!! $page->body !!}
                                
                                <div class="mt-40">
                                    <a href="/company" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">{{$constants[11]->constant}}</a>
                                </div>
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->