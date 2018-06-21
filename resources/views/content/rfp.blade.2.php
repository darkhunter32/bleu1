<div class="row" style="font-size: 12px;color: #555;">
                        <div class="col-md-8 col-md-offset-2">
                        {{ Form::open(array('url' => '/request_for_proposal', 'files' => true,'role'=>'form','style'=>'padding-top: 100px;padding-bottom: 100px','data-toggle'=>'validator')) }}   
                        
                                <div class="clearfix">
                                <?php
                                $er="";
                                if(!empty($error)) $er=$error;
                                echo $er;
                                ?>
                                
                                    <!-- left col --><div class="cf-left-col">
                                        <!-- First Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter first name field." id="First_Name" name="First_Name" placeholder="First Name"  type="text" required  value="<?php echo isset($_POST['First_Name']) ? $_POST['First_Name'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Company Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter company name field." id="Company_Name" name="Company_Name" placeholder="Company Name"  type="text" required value="<?php echo isset($_POST['Company_Name']) ? $_POST['Company_Name'] : '' ?>" />
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>

                                  <!-- right col --><div class="cf-right-col">
                                        <!-- Last Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter last name field." id="Last_Name" name="Last_Name" placeholder="Last Name"  type="text" required value="<?php echo isset($_POST['Last_Name']) ? $_POST['Last_Name'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>  
                                        <!-- Job Title -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter job Title field." id="Job_Title" name="Job_Title" placeholder="Job Title"  type="text" required value="<?php echo isset($_POST['Job_Title']) ? $_POST['Job_Title'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>

                                    <!-- Company Adress -->
                                    <div class="form-group">
                                        <textarea class="form-control" data-error="Please enter Company Adress field." id="Company_Adress" name="Company_Adress" placeholder="Company Adress"  type="text" required ><?php echo isset($_POST['Company_Adress']) ? $_POST['Company_Adress'] : '' ?></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- left col --><div class="cf-left-col">
                                        <!-- City -->
                                        <div class="form-group">
                                        <select name="City" class="form-control" required data-error="Please select a City." >
                                            <option value="" disabled <?php if(!isset($_POST['City'])) echo "selected";?>>Select a City</option>
                                            <?php $locations = App\City::all()->sortBy('id');
                    foreach($locations as $location){
                      echo '<option value="'.$location->name.'"'; if (isset($_POST['City']) && $_POST['City']==$location->name) echo "selected>".$location->name.'</option>';
                       } ?>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Country Code -->
                                        <div class="form-group">
                                            <input class="form-control" data-error="Please enter Country Code field." id="Country_code" name="Country_code" placeholder="Country Code"  type="text" required  pattern="\d{3,}$" value="<?php echo isset($_POST['Country_code']) ? $_POST['Country_code'] : '' ?>"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>
                                    <!-- right col --><div class="cf-right-col">
                                        <!-- Zip Code -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter Zip Code field." id="Zip_Code" name="Zip_Code" placeholder="Zip Code"  type="text" required value="<?php echo isset($_POST['Zip_Code']) ? $_POST['Zip_Code'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>  
                                        <!-- Phone Number -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter Phone Number field." id="Phone_Number" name="Phone_Number" placeholder="Phone Number"  type="tel" required  pattern="\d{9,}$" value="<?php echo isset($_POST['Phone_Number']) ? $_POST['Phone_Number'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>

                                    <!-- E-mail -->
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter E-mail field." id="Email" name="Email" placeholder="E-mail"   type="email" required value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <!-- Project City -->
                                     <div class="form-group">
                                        <select name="PCity" class="form-control" required data-error="Please select a City.">
                                            <option value="" disabled >Select a Project City</option>
                                            <option value="city1" selected>city1</option>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Exhibition (gets a value from exhibition page) -->
                                     <div class="form-group">
                                        <select name="Exhibition" class="form-control" required data-error="Please select an Exhibition.">
                                            <option value="" disabled >Select an Exhibition</option>
                                            <option value="exhibition" selected>exhibition</option>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- left col --><div class="cf-left-col">
                                        <!-- Budget -->
                                        <div class="form-group">
                                            <input class="form-control" data-error="Please enter your Budget." id="Budget" name="Budget" placeholder="Budget"  type="text" required  pattern="\d{4,}$" value="<?php echo isset($_POST['Budget']) ? $_POST['Budget'] : '' ?>"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>
                                    <!-- right col --><div class="cf-right-col">
                                       <!-- Currency -->
                                     <div class="form-group">
                                        <select name="Currency" class="form-control" required data-error="Please select a Currency.">
                                            <option value="" disabled >Select a Currency</option>
                                            <option value="MAD" selected>Morocco Dirham(MAD)</option>
                                            <option value="EUR">Euro(EUR)</option>
                                            <option value="USD">US Dollar(USD)</option>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>
                                        <!-- Details -->
                                    <div class="form-group">
                                        <textarea class="form-control" data-error="Please enter the project details." id="details" name="details" placeholder="Details" required ><?php echo isset($_POST['details']) ? $_POST['details'] : '' ?></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <link href="{{ url('/') }}/css/fileinput.min.css" rel="stylesheet" type="text/css">
                                       <!-- Attachement -->
                                       <div class="form-group">
                                     
                                       <label class="btn btn-default"><input type="file" hidden id="attachement" name="attachement"></label>
                                    </div>
                                    <p>(Supports PDF, Docx and Doc. Maximum File Size : 2MB)</p>
                                    <!-- check1 -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms1" name="terms1" data-error="you should accept the terms before sending a request" required>
                                            By checking this box, I hereby agree and understand that the contact information provided will be used by GROUPE MAGHRE EXPO to process my enquiry and that I shall be approached by a GROUPE MAGHRE EXPO-designated team to proceed with any actions relating to my request and the nature of my enquiry.
                                        </label>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- check2  this is related to mass mailing-->
                                    <div class="form-group" style="display:none">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms2" name="terms1" data-error="you should accept the terms before sending a request" required checked>
                                            By checking this box I hereby agree and understand that the contact information provided will be used by GROUPE MAGHRE EXPO to send me information on products and services and marketing messages, and to ascertain if I am interested in any proposals which GROUPE MAGHRE EXPO considers appropriate or useful to me, including, but not limited to, branding, exhibits, events, interior fit-out and other marketing activities. I understand that I may unsubscribe or opt not to receive these messages at any time by clicking 
                                        </label>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <script>
function refreshCaptcha(){
$.ajax({
url: "/refereshcapcha",
type: 'get',
  dataType: 'html',        
  success: function(json) {
    $('.refereshrecapcha').html(json);
  },
  error: function(data) {
    alert('Try Again.');
  }
});
}
</script>
                                   <!-- Captcha -->
                                   <link rel="stylesheet" href="\css\bootstrap2.min.css">
                                   <div class="form-group ">
                                   <div class="refereshrecapcha" style="display: inline-block;">
                                   <input type="hidden" name="_token" value="<?php echo csrf_token();?>"><?php echo captcha_img('flat');?></div><input class="form-control" data-error="Please enter the captcha." id="captcha" placeholder="captcha" name="captcha" type="text"  style="max-width: 50%; display: inline-block;" required />
                                   <a href="javascript:void(0)" onclick="refreshCaptcha()" style="color: #111 !important;"><span class="glyphicon" style="font-size: 20px;">&#xe031;</span></a>
                                   <div class="help-block with-errors"></div>
                                        </div>
                                   
                                    <!-- check3 -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms3" name="terms3"  data-error="you should accept the terms before sending a request" required>
                                            I have read and accepted the <a href="#" style="color: #111 !important;">Terms of Use and Personal Data Policy</a>.
                                        </label>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Inform Tip -->                                        
                                        <div class="form-tip pt-20">
                                            <i class="fa fa-info-circle"></i> Tous les champs sont obligatoires
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Send Button -->
                                        <div class="align-right pt-10">
                                        <button class="submit_btn btn btn-mod btn-medium btn-round" type="submit">Submit</button>
                                        </div>
                                        
                                    </div>
                                    
                                </div>                      
                                <div id="result"></div>
                                {{ Form::close() }}
                            
                        </div>
                    </div>