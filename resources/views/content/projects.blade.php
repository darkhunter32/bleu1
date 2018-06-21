<!-- Section -->
<section class="page-section" style="padding-bottom: 80px !important">
                <div class="container relative">
                <?php $projects = App\Cproject::all()->sortByDesc('id')->translate(config('global.lang_trans'));$inc=0 ?>
                    @foreach($projects as $project)
                    <?php $inc++ ; ?>
                    <div class="row" style="margin-bottom: 50px;margin-top: 50px;">
                       
                        <div class="col-md-7 mb-sm-40  wow <?php if($inc % 2 == 0) {echo'fadeInRight';} else {echo'fadeInLeft';}?> <?php if($inc % 2 == 0) echo'col-md-push-5'?>">
                            
                            <!-- About Project -->
                            <div class="text" style="text-align: justify">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">{{$project->project}}</h3>
                                
                                {!!$project->txt!!}
                                
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1 wow <?php if($inc % 2 == 0) {echo'fadeInLeft';} else {echo'fadeInRight';}?> <?php if($inc % 2 == 0) echo'col-md-pull-8'?>">
                           <!-- Image presentation -->   
                            <img src="{{ Voyager::image( $project->image) }}" alt=""  style="width: 100%"/>
                            <!-- End Image presentation -->
                            
                        </div>
                        
                       
                    </div>
                    <hr style="margin-top: 10px;margin-bottom: 10px">
                    @endforeach 
</div>
</section>