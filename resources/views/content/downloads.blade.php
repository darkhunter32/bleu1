<div class=" clearlist blog-posts-carousel2">
<?php $downloads = App\Download::all()->sortByDesc('id')->translate(config('global.lang_trans')); ?>

@foreach($downloads as $download)
                    <!-- Post Item block to repeat-->
                    <div class="blog-posts-carousel-item align-center">
                        <div class="post-prev-img" style="padding-right: 5px">
                            
                            	 <ul class="works-grid work-grid-gut clearfix font-alt hide-titles" id="work-grid" style="height: 100% !important">
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item" style="width: 100% !important">
                            <a href="/references" class=" mfp-image">
                                <div class="work-img">
                                   <img src="{{ Voyager::image( $download->image ) }}" alt="{{ $download->name }}" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">{{ $download->category }}</h3>
                                    <div class="work-descr">
                                    {{ $download->name }}
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
						</ul>
                            
                        </div>
                   </div>
                    <!-- End Post Item -->
                    @endforeach               
                </div>