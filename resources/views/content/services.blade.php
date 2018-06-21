 <!-- Section -->
 <section class="page-section" style="background-color: #f4f4f4">		
				<?php $services = App\Service::all()->sortBy('id')->translate(config('global.lang_trans'));?>
			<div class="container"><div class="row"><a href="{{ url('/') }}/services">/Services</a></div></div>
                <div class="relative">                   
                       <div class="main">					   
				<ul id="og-grid" class="og-grid">				
                @foreach($services as $service)
				<!--item to repeat-->
					<li>					
						<a href="#" data-largesrc="{{ Voyager::image( $service->image ) }}" data-title="{{$service->name}}" 
 data-description="{{$service->txt}}" class="post-prev-img">
							<img src="{{ Voyager::image( $service->image ) }}" alt="{{$service->service}}"/>
						</a>
						<div class="post-prev-title font-alt">
                                        <a href="#">{{$service->service}}</a>
                                    </div>
					</li>
					
				   <!-- End item to repeat-->
				   @endforeach
						   </ul></div>
                        
                               
                    
                </div>
               
            </section>
            <!-- End Section -->