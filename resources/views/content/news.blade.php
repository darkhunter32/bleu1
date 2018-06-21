<div class="blog-posts-carousel">
<?php $news = App\News::all()->sortByDesc('id')->translate(config('global.lang_trans'));?>
                    @foreach($news as $news)
                    <!-- Post Item block to repeat for news-->
                   
                    <div class="blog-posts-carousel-item  align-center">
                        <div class="post-prev-img">
                            <a href="/news"><img src="{{ Voyager::image( $news->image ) }}" alt="" /></a>
                        </div>
                        <div class="post-prev-title font-alt">
                            <a href="/news">{{ $news->name_exhibition }}</a>
                        </div>
                        <div class="post-prev-info font-alt">
                            <a href="/news">{{ $news->client }}</a> | {{ $news->date }}
                        </div>
                    </div>
                    
                    <!-- End Post Item -->
                    @endforeach   
                </div>