@include('header.h')          
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-md-7 mb-sm-40">
                            
                            <!-- Gallery -->
                           <div class="demo">
        <div class="item" >            
            <div class="clearfix">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                <?php $projects = App\Project::with('exhibition_f')->get()->where('name', '=', $project)->translate(config('global.lang_trans'));?>
                    @foreach($projects as $project)
                            @foreach(json_decode($project->gallery) as $pr)
                            <li data-thumb="{{ Voyager::image( $pr ) }}"> 
                            <img src="{{ Voyager::image( $pr ) }}" alt="{{$project->name}}" />
                            </li>
                            @endforeach
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </div>	
                            <!-- End Gallery -->
                            
                        </div>
                        
                        <div class="col-md-5 col-lg-4 col-lg-offset-1">
                            
                            <!-- About Project -->
                            <div class="text">
                                
                                <h3 class="font-alt mb-30 mb-xxs-10">{{$project->name}}</h3>
                                <h5 class="font-alt mb-30 mb-xxs-10">{{ $project->exhibition_f->name}}/{{ $project->exhibition_f->from}}</h5>
                                <p>
                                {{$project->description}}
                                </p>
                                
                                <div class="mt-40">
                                @if($project->link)<a href="{{$project->link}}" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">{{$project->txt_link}}</a>@endif
                                </div>
                                
                            </div>
                            <!-- End About Project -->
                            
                        </div>
						
                    </div>
                </div>
            </section>
            <!-- End Section -->
             <link rel="stylesheet"  href="{{ url('/') }}/css/lightslider.css"/>
             <style>
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
		.demo{
			width: 100%;
		}
    </style>
            
            @include('footer.footer-scr') 
            
                 <script src="{{ url('/') }}/js/lightslider.js"></script> 
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:5,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
				vThumbWidth:150,
				enableTouch:true,
				enableDrag:true,
				pauseOnHover:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>

    </body>
</html>      
            

