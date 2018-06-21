<style>
#cnt a:link{color:#010101;
text-decoration:none;}
#cnt a:hover{color:#ffffff;
text-decoration:none;}
#cnt a:visited{color:#010101;
text-decoration:none;}
 .nws{ 
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: #f5f5f5;
    left:-60px;
    z-index: 9999;
    background: rgba(10,10,10, .95);
    border-top:2px solid #0000;
    border-right: 1px solid #EBB51F;
    -webkit-transform: skew(30deg);
    -moz-transform: skew(30deg);
    -o-transform: skew(30deg);
    transform: skew(30deg);
    }
    .cf-left-col, .cf-right-col{float: left;}
    .nws .container{ 
    position: fixed;
    margin-left:60px;
    padding-top: 10px;
    -webkit-transform: skew(-30deg);
    -moz-transform: skew(-30deg);
    -o-transform: skew(-30deg);
    transform: skew(-30deg);
    }
    .nws .close{ 
    -webkit-transform: skew(-30deg);
    -moz-transform: skew(-30deg);
    -o-transform: skew(-30deg);
    transform: skew(-30deg);
    text-shadow: 0 1px 0 #fff;
    opacity: .8;
    font-size: 30px;
    margin-top: -5px;
    margin-right: 5px;
    z-index: 111111;
    position: absolute;
    right: 0;
    }
    #rp{
        margin-top: -10px;
        background-color: #ebb51f;
        height: 60px;
        float: right;
        margin-right: 60px;
        max-width: 200px;
        -webkit-transform: skew(30deg);
        -moz-transform: skew(30deg);
        -o-transform: skew(30deg);
        transform: skew(30deg);
        }
        #rp p{
            -webkit-transform: skew(-30deg); 
            -moz-transform: skew(-30deg);
            -o-transform: skew(-30deg);
            transform: skew(-30deg);
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
            color: #010101;
            font-weight: bold;
            text-align:center;
           }
    @media (min-width: 992px) {
        .nws{ 
    width: 100%;
    height: 60px;
    left:-100px;}
    .nws .container{ 
    margin-left:100px;}

   #frm{margin-right: 120px;
    } 
    #rp{
        margin-top: -10px;
        background-color: #ebb51f;
        height: 60px;
        float: right;
        margin-right: 100px;
        max-width: 200px;
        -webkit-transform: skew(30deg);
        -moz-transform: skew(30deg);
        -o-transform: skew(30deg);
        transform: skew(30deg);
        text-align: center;
        }

}
@media (max-width: 769px) {
       
    #rp{
        margin-top: -45px;
    background-color: #ebb51f;
    height: 80px;
    float: right;
    margin-right: 60px;
    max-width: 200px;
    -webkit-transform: skew(30deg);
    -moz-transform: skew(30deg);
    -o-transform: skew(30deg);
    transform: skew(30deg);
        }
        

}
@media (max-width: 700px) {
       
       #rp{
        margin-top: -70px;
    width: 100%;
    background-color: #ebb51f;
    height: 30px;
    float: left;
    margin-left: 20px;
    max-width: 200px;
    -webkit-transform: none;
    -moz-transform:none;
    -o-transform: none;
    transform: none;
           }
           #rp p{
           
            font-size: 12px;
            font-weight: bold;
            margin-top: 5px;
            color: #010101;
            -webkit-transform: none;
    -moz-transform:none;
    -o-transform: none;
    transform: none;
            
           }
   #fr{margin-top: 30px;}
   .nws{ 
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 80px;
    background-color: #f5f5f5;
    left:-60px;
    z-index: 9999;
    background: rgba(10,10,10, .95);
    border-top:2px solid #0000;
    border-right: 1px solid #EBB51F;
    -webkit-transform: skew(30deg);
    -moz-transform: skew(30deg);
    -o-transform: skew(30deg);
    transform: skew(30deg);
    }
   }
@media (max-width: 460px) {
       
       #rp{
        margin-top: -95px;
    width: 100%;
    background-color: #ebb51f;
    height: 30px;
    float: left;
    margin-left: 20px;
    max-width: 200px;
    -webkit-transform: none;
    -moz-transform:none;
    -o-transform: none;
    transform: none;
           }
           #rp p{
            -webkit-transform: none;
    -moz-transform:none;
    -o-transform: none;
    transform: none;
    font-size: 12px;font-weight: normal;
    color: #010101 !important;
           }
   #fr{margin-top: 30px;}
   .nws{ 
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 100px;
    background-color: #f5f5f5;
    left:-60px;
    z-index: 9999;
    background: rgba(10,10,10, .95);
    border-top:2px solid #0000;
    border-right: 1px solid #EBB51F;
    -webkit-transform: skew(30deg);
    -moz-transform: skew(30deg);
    -o-transform: skew(30deg);
    transform: skew(30deg);
    }
   }
    

 </style>
 <script>
  
 </script>
 <div class="nws" id="nws">
 <button type="button" class="close" aria-label="Close" id="cls">
  <span aria-hidden="true">&times;</span>
</button>
      <div class="container" id="cnt" style="width:100%">
      <div class="row">      
                 
                        <div class="col-md-8 col-sm-8" id="fr">    
        <span style="color: #EBB51F;font-size: 13px;">Register for our <b>Newsletter</b></span>
        {{ Form::open(array('url' => '/newsletter','role'=>'form','data-toggle'=>'validator','style'=>'display: inline-block;margin-left: 20px;vertical-align: middle;','id'=>'frm')) }}   
        <!-- E-mail -->
        <div class="cf-left-col" style="width: 80%;">
        <input class="form-control" data-error="Please enter E-mail field." id="Email" name="Email" placeholder="E-mail"   type="email" required value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : '' ?>"/>
        </div>
        <div class="cf-right-col" style="width: 18%;">
         <button class="submit_btn btn btn-mod btn-medium btn-round" type="submit" style="max-width: 50px;    padding:5px;vertical-align: unset;height:34px" id="btn">Go</button>
         </div>
         <div class="help-block with-errors"></div>
         <!-- Send Button -->
         
                        
        {{ Form::close() }}                
      </div>
   <a href="/request_for_proposal">
    <div class="col-md-3 col-sm-3" style="" id="rp"> 
        <p style="">Request For Proposal</p>
</div></a>  
    </div>
    </div> 
    </div>
 <footer class="page-section bg-gray-lighter footer pb-60" style="background-color: black; padding:20px 0 !important">

                <div class="container">
                    <!--content-->
                    <div class="row">
                        
                        <!-- Col -->
                        
                        <div class="col-sm-8 mb-40">
                            
                            
                               <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            
                        </div>
                        <!-- End Copyright -->
                        
                        
                        
                    </div>
                    <!-- End Footer Text --> 
                           
                            
                        </div>
                        
                        <!-- End Col -->
                      
                        
                        <!-- Col -->
                        
                       <div class="col-sm-4 mb-40">
                            
                            <div class="text" style="float: right">
                                <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                        <a href="#top"><img src="images/logo.png" width="78" height="36" alt="" /></a>
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Social Links -->
                    <div class="footer-social-links">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links -->  
                            </div>
                            
                        </div>
                        
                        <!-- End Col -->
                        
                     </div>
                   
                      <!--second row-->        
                     <div class="row">
                        
                        <!-- Col -->
                        
                        <div class="col-sm-8 mb-40" >
                            
                            
                               <!-- Footer Text -->
                    <div class="footer-text" style="float: left">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="#" target="_blank">&copy; GROUPE MAGHREB EXPO 2018</a>.
                        </div>
                        <!-- End Copyright -->
                      </div>
						 </div>
					</div>
                    <!-- End Footer Text -->  
                    <!--End second row-->         
                    
                    <!--content-->
                    
                    
                   
                    
                    
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>