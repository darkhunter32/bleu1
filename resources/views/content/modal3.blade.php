 <!-- Section -->
            <section class="page-section" style="background-color: #f4f4f4">
                <div class="relative">
                       <div class="main">
                       {{config('global.lang_trans')}}
				<ul id="og-grid" class="og-grid expand2">
                <?php $categories = App\ProductSubcategory::all()->where('category', '=', $page->id)->sortBy('id')->translate(config('global.lang_trans'));$count=1;?>
                @foreach($categories as $category)
				<!--item to repeat-->
					<li id="{{$count++}}">					
						<a href="#" data-largesrc="{{ Voyager::image( $category->image ) }}" data-title="" data-description="" class="post-prev-img" data-category='
                   <div class="container relative">
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-gut clearfix font-alt hover-white" id="work-grid">
                    <?php $sub_categories = App\ProductSubSubcategoory::all()->where('sub_category', '=', $category->id)->sortBy('id')->translate(config('global.lang_trans'));?>
                  
                    @foreach($sub_categories as $s_cat)
                        <!-- Work Item item to repeat-->
                        <li class="work-item">
                            <a href="products/{{$category->s_cat->abreviation}}/{{$category->p_subcategories}}/{{ $s_cat->name }}" class=" mfp-image">
                                <div class="work-img">
                                    <img src="{{ Voyager::image( $s_cat->image ) }}" alt="{{$s_cat->name}}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{$s_cat->name}}</h3>   
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        @endforeach
                         </ul>
                    <!-- End Works Grid -->
                    
                </div>
                                    <!--End link to repeat-->'>
							<img src="{{ Voyager::image( $category->image ) }}" alt="img01" style="width: 100%"/>
						</a>
						<div class="post-prev-title font-alt">
                                        <a href="#">{{ $category->p_subcategories }}</a>
                                    </div>
					</li>
				   <!-- End item to repeat-->
                   @endforeach
						   </ul></div>
                </div>
            </section>
            <!-- End Section -->