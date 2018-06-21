<!-- Section -->
            <section class="page-section" id="about" style="padding-top: 40px !important">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                    <?php $company = App\Company::all()->sortBy('id')->translate(config('global.lang_trans'));;?>
                    {{$company[0]->title_t}}
                    </h2>
                    
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-text align-center mb-70 mb-xs-40">
                            {{$company[0]->txt_t}}
                            </div>
                        </div>
                    </div>
                   
                    
                    <div class="row multi-columns-row">
                    <?php $teams = App\Team::all()->sortBy('id')->take(4)->translate(config('global.lang_trans'));?>
                    @foreach($teams as $team)
                        <!-- Team Item -->
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30 wow flipInY">
                            <div class="team-item" >
                                
                                <div class="team-item-image">
                                    
                                    <img src="{{ Voyager::image( $team->image) }}" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal">{{$team->saying_title}}</h4>
                                        
                                        <p>
                                        {{$team->saying_txt}}
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                    {{$team->name}} 
                                    </div>
                                    
                                    <div class="team-item-role">
                                    {{$team->job}}
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Team Item -->
                        @endforeach
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
</body>
</html>