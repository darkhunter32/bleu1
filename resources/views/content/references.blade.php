<section class="page-section" style="background-color: #f4f4f4">
                <div class="container relative">
                     <!-- Section -->
         
                            <div class="section-text align-center">
                                <blockquote>
                                    <p style="font-size: 15px;">
                                    <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                                    {{$constants[16]->constant}}
                                    </p>
                                </blockquote>
                                
                                
                                
                            </div>
					<hr size="20"></hr>
                        
             <!-- End Section --> 
                     <!-- Section -->
            @include('content.list_pdf') 
             <!-- End Section -->
                      
                     <hr size="20"></hr>  
					 <!-- Section -->
            @include('content.header_contact') 
             <!-- End Section -->
             <!-- Contact Form -->
                    @include('content.contact_form') 
                    <!-- End Contact Form -->	
	</div>
</section>
<!-- Google Map -->
             @include('footer.map') 
            
            <!-- End Google Map -->