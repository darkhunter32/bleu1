 <!-- Section -->
            <section class="page-section" style="background-color: #f4f4f4">
			<?php $cat_page = App\ProductSubcategory::where('p_subcategories', '=', $cat)->first()->translate(config('global.lang_trans'));
			$supcat=$cat_page->s_cat->slug;
			$supcat_t=$cat_page->s_cat->title;?>
			<?php $sub_cat = App\ProductSubSubcategoory::where('name', '=', $subcat)->first()->translate(config('global.lang_trans'));?>		
				<?php $products = App\Product::all()->where('subcategory', '=', $sub_cat->id)->sortBy('id')->translate(config('global.lang_trans'));?>
			<div class="container"><div class="row"><a href="{{ url('/') }}/{{$supcat}}">{{$supcat_t}}/{{$cat}}</a>/{{$subcat}}</div></div>
                <div class="relative">                   
                       <div class="main">					   
				<ul id="og-grid" class="og-grid">				
                @foreach($products as $product)
				<!--item to repeat-->
					<li>					
						<a href="#" data-largesrc="{{ Voyager::image( $product->image ) }}" data-title="{{$product->name}}" 
 data-description="{{$product->description}}" class="post-prev-img" 
 data-category='@if(($product->caracteristiques))<h4 style="font-size: 15px !important">Caractéristiques</h4><div class="og-details" style="height: auto !important;width:100% !important">{{$product->caracteristiques}}</div> @endif' 
 data-dimensions='@if(($product->dimensions))<h4 style="font-size: 15px !important;">Dimensions</h4><div class="og-details" style="height: auto !important;width:100% !important">{{$product->dimensions}}</div> @endif' 
 data-capacite='@if(($product->capacite))<h4 style="font-size: 15px !important;">Capacité</h4><div class="og-details" style="height: auto !important;width:100% !important">{{$product->capacite}}</div> @endif' 
 data-accessories='<h4 style="font-size: 15px !important;">Accessoires</h4><a href="{{ Voyager::image( $product->accessories ) }}" data-lightbox="image-1"><img src="{{ Voyager::image( $product->accessories ) }}" alt="{{$product->name}}/accessories" style="
    width: 80%;
"/></a>' data-pdf='<a href="{{ url('/') }}/storage/{{json_decode($product->pdf, true)[0]["download_link"]}}" class="btn btn-mod btn-border btn-round" style="display:inline-block" target="_blank">Télécharger la Brochure</a>'>
							<img src="{{ Voyager::image( $product->image ) }}" alt="{{$product->name}}"/>
						</a>
						<div class="post-prev-title font-alt">
                                        <a href="#">{{$product->name}}</a>
                                    </div>
					</li>
					
				   <!-- End item to repeat-->
				   @endforeach
						   </ul></div>
                        
                               
                    
                </div>
               
            </section>
            <!-- End Section -->