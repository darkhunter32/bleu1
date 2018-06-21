<!-- Section -->
<section class="page-section" style="padding-bottom: 80px !important">
                <div class="container relative">
                <?php $partners = App\Partner::all()->sortByDesc('id')->translate(config('global.lang_trans'));$inc=0 ?>
                    @foreach($partners as $partner)
                    <?php $inc++ ; ?>
                    <div class="row" style="margin-bottom: 50px;margin-top: 50px;">
                       
                        <div class="col-md-7 mb-sm-40  wow <?php if($inc % 2 == 0) {echo'fadeInRight';} else {echo'fadeInLeft';}?> <?php if($inc % 2 == 0) echo'col-md-push-5'?>">
                            
                            <!-- About Project -->
                            <div class="text" style="text-align: justify">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">{{$partner->partner}}</h3>
                                
                                {!!$partner->desc!!}
                                <div class="mt-40">
                                    <a href="{{$partner->link}}" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">{{$partner->txt_link}}</a>
                                </div>
                              
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1 wow <?php if($inc % 2 == 0) {echo'fadeInLeft';} else {echo'fadeInRight';}?> <?php if($inc % 2 == 0) echo'col-md-pull-8'?>">
                           <!-- Image presentation -->   
                            <img src="{{ Voyager::image( $partner->image) }}" alt=""  style="width: 100%"/>
                            <!-- End Image presentation -->
                            
                        </div>
                        
                       
                    </div>
                    <hr style="margin-top: 10px;margin-bottom: 10px">
                    @endforeach 
</div>
</section>