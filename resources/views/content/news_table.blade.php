<!-- Section -->
            <section class="page-section" style="background-color: #f4f4f4">
                <div class="container relative">
   <table id="news" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead style="display: none">
            <tr><th>News</th><th>id</th></tr>
        </thead>
        
        <tbody>
        <?php $news = App\News::all()->sortByDesc('id')->translate(config('global.lang_trans'));$inc=0; ?>

                        @foreach($news as $news)
                         <!--repeat tr-->
            <tr>
                <td><div class="row">
                        
                        <div class="col-md-7 mb-sm-40 wow fadeInLeft">
                        <img src="{{ Voyager::image( $news->image ) }}" alt="{{ $news->alt }}" />
                              </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1 wow fadeInRight">
                            
                            <!-- About Project -->
                            <div class="text">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">{{ $news->title }}</h3>
                                {!! $news->text !!}
                                 @if($news->link)
                                <div class="mt-40">
                                    <a href="{{ $news->link }}" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">{{ $news->txt_link }}</a>
                                </div>
                                @endif
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                    </div></td>
               <td style="display: none">{{ ++$inc }}</td>
            </tr>
           <!--End repeat tr-->
           @endforeach
                
        </tbody>
    </table>
      </div>
            </section>
            <!-- End Section -->