<section class="page-section">
                <div class="container relative">
                <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                    
                    <!-- Row -->
                    <div class="row">
                        
                        <!-- Col -->
                        
                        <div class="col-sm-7 mb-40">
                            
                            <div class="text">
                            <h5 class="mt-0 font-alt">{{$constants[12]->constant}}</h5>
                         
                         @include('content.news')
                            </div>
                            
                        </div>
                        
                        <!-- End Col -->
                        
                        <!-- Col -->
                        
                        <div class="col-sm-5 mb-40">
                            
                            <div class="text">
                                <h5 class="mt-0 font-alt">{{$constants[13]->constant}}</h5>
                                
                                @include('content.downloads')
                            </div>
                            
                        </div>
                        
                        <!-- End Col -->
                        
                     </div>
	</div>
	
</section>