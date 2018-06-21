 <!-- Section -->
            <section class="page-section" style="padding-bottom: 80px !important">
                <div class="container relative">
                    
                    <div class="row">
                       
                        <div class="col-md-7 mb-sm-40  wow fadeInLeft">
                            
                            <!-- About Project -->
                            <div class="text" style="text-align: justify">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">{{$page->title}}</h3>
                                
                                {!!$page->body!!}
                                
                              
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1 wow fadeInRight ">
                           <!-- Image presentation -->   
                            <img src="{{ Voyager::image( $page->image) }}" alt=""  style="width: 100%"/>
                            <!-- End Image presentation -->
                            
                        </div>
                        
                       
                    </div>
                   <!-- Section -->
            @include('content.E_enchiffre')
             <!-- End Section -->
                    <!--row 2-->
                    <div class="row">
                    <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                    <!--col-->
                     <div class="col-md-8 wow fadeInLeft">
						 <hr style="margin-top: 10px;margin-bottom: 10px"></hr>
                          <div class="text">{{$constants[15]->constant}}</div>
                           <hr style="margin-top: 10px;margin-bottom: 10px"></hr>
                            
                        </div>
                    <!--col-->
                    <div class="row">
                    <!--col-->
                     <div class="col-md-5 wow zoomIn" data-wow-delay="0.1s">
                     <?php $company = App\Company::all()->sortBy('id')->translate(config('global.lang_trans'));?>
                           <!-- Image presentation -->   
                            <img src="{{ Voyager::image( $company[0]->image_c ) }}" alt="{{$page->title}}" style="width: 100%"/>
                            <!-- End Image presentation -->    
                        </div>
                    <!--col-->
                    <!-- Col -->
                        
                        <div class="col-sm-7 mb-xs-40 wow zoomIn" data-wow-delay="0.2s">    
                            <!-- Accordion -->
                            <dl class="accordion">
                            <?php $Dcs = App\Dc::all()->sortBy('id')->translate(config('global.lang_trans'));?>
                            @foreach($Dcs as $Dc)
                                <dt>
                                    <a href="">{{$Dc->title}}</a>
                                </dt>
                                <dd>
                                {!!$Dc->txt!!}
                                </dd>
                             @endforeach
                            </dl>
                            <!-- End Accordion -->
                            
                        </div>
                        
                        <!-- End Col -->  
					</div>
                    <!--End row2-->
                </div>
            </section>
            <!-- End Section -->