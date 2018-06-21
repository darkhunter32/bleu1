  <div class="container">
      <div class="content">
      
 <style>
		  .ref:nth-child(odd) {background: #111111}
	 .ref{
	 padding-top: 20px}
	 h5{
	 font-weight: 700}
	 hr{
		 border-top: 1px solid #dddddd
	 }
		  </style>
      <?php $downloads = App\Download::all()->sortByDesc('id')->translate(config('global.lang_trans'));$inc=0 ?>

@foreach($downloads as $download) 
<?php $inc++ ; ?>               
      <!--Row-->                
     <div class="row ref wow <?php if($inc % 2 == 0) {echo'fadeInRight';} else {echo'fadeInLeft';}?>">
                      <!-- Col -->
                        <div class="col-sm-4 mb-40 <?php if($inc % 2 == 0) echo'col-sm-push-8'?>">                           
                            <div class="text">                              
								  <div class="books">
									<div class="thumb">
									  <img id="{{ $download->s_name }}" src="{{ Voyager::image( $download->image ) }}" class="btn" alt="{{ $download->name }}">
									</div>
								  </div>								
                            </div>
                            
                        </div>
                        <!-- End Col -->
                        <!-- Col -->
                        <div class="col-sm-6 mb-40 <?php if($inc % 2 == 0) echo'col-sm-pull-4'?>" <?php if($inc % 2 == 0) echo'style="float: right"'?>>
                            <div class="text" <?php if($inc % 2 == 0) echo'style="color:white"'?>>
                                <h5 class="uppercase" <?php if($inc % 2 == 0) echo'style="color:  #EBB51F"'?>>{{ $download->name }}</h5>
                                <p style="font-size: 12px;">{{ $download->description}}</p>
                            </div>
                        </div>
                       <!-- End Col -->
                     </div>  
                     <!--End Row-->  
                     @endforeach 
                               
   
	  </div>
</div>