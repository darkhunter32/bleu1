<?php
$FN="";
if(!empty($file)) $FN=$file;
echo $FN;
?>
<div class="row" style="font-size: 12px;color: #555;">
                        <div class="col-md-8 col-md-offset-2">
                        {{ Form::open(array('url' => '/request_for_proposal','role'=>'form','style'=>'padding-top: 100px;padding-bottom: 100px','data-toggle'=>'validator')) }}   
                        
                                <div class="clearfix">
                                    
                                    <!-- left col --><div class="cf-left-col">
                                        <!-- First Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter first name field." id="First_Name" name="First_Name" placeholder="First Name"  type="text" required  value="test"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Company Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter company name field." id="Company_Name" name="Company_Name" placeholder="Company Name"  type="text" required value="test" />
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>

                                  <!-- right col --><div class="cf-right-col">
                                        <!-- Last Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter last name field." id="Last_Name" name="Last_Name" placeholder="Last Name"  type="text" required value="test"/>
                                        <div class="help-block with-errors"></div>
                                        </div>  
                                        <!-- Job Title -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter job Title field." id="Company_Name" name="Company_Name" placeholder="Job Title"  type="text" required value="test"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>

                                    <!-- Company Adress -->
                                    <div class="form-group">
                                        <textarea class="form-control" data-error="Please enter Company Adress field." id="Company_Adress" name="Company_Adress" placeholder="Company Adress"  type="text" required >cxswq</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- left col --><div class="cf-left-col">
                                        <!-- City -->
                                        <div class="form-group">
                                        <select name="City" class="form-control" required data-error="Please select a City." >
                                            <option value="" disabled >Select a City</option>
                                            <option value="city1" selected>city1</option>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Country Code -->
                                        <div class="form-group">
                                            <input class="form-control" data-error="Please enter Country Code field." id="Country_code" name="Country_code" placeholder="Country Code"  type="text" required  pattern="\d{3,}$" value="1235"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>
                                    <!-- right col --><div class="cf-right-col">
                                        <!-- Zip Code -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter Zip Code field." id="Zip_Code" name="Zip_Code" placeholder="Zip Code"  type="text" required value="6351564"/>
                                        <div class="help-block with-errors"></div>
                                        </div>  
                                        <!-- Phone Number -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="Please enter Phone Number field." id="Phone_Number" name="Phone_Number" placeholder="Phone Number"  type="tel" required  pattern="\d{9,}$" value="1234567896"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>

                                    <!-- E-mail -->
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter E-mail field." id="Email" name="Email" placeholder="E-mail"   type="email" required value="test@test.com"/>
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
                                            <input class="form-control" data-error="Please enter your Budget." id="Budget" name="Budget" placeholder="Budget"  type="text" required  pattern="\d{4,}$" value="12354545"/>
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
                                        <textarea class="form-control" data-error="Please enter the project details." id="details" name="details" placeholder="Details" required >dfxg</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <link href="{{ url('/') }}/css/fileinput.min.css" rel="stylesheet" type="text/css">
                                       <!-- Attachement -->
                                       <div class="form-group">
                                       <div class="file-input file-input-new"><div class="file-preview ">
    <button type="button" class="close fileinput-remove" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>    <div class="file-drop-disabled">
    <div class="file-preview-thumbnails">
    </div>
    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
    <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>
</div>
<div class="kv-upload-progress kv-hidden" style="display: none;"><div class="progress">
    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
        0%
     </div>
</div></div><div class="clearfix"></div><span class="glyphicon glyphicon-envelope"></span>
<div class="input-group file-caption-main">
  <div class="file-caption form-control  kv-fileinput-caption" tabindex="500">
  <span class="file-caption-icon"></span>
  <input class="file-caption-name" onkeydown="return false;" onpaste="return false;" placeholder="Select file..." name="file">
</div>
<div class="input-group-btn input-group-append">
      <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Remove</span></button>
      <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
      <button type="submit" tabindex="500" title="Upload selected files" class="btn btn-default btn-secondary fileinput-upload fileinput-upload-button"><i class="glyphicon glyphicon-upload"></i>  <span class="hidden-xs">Upload</span></button>
      <div tabindex="500" class="btn btn-mod btn-file" style="    padding: 8px 13px !important;"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;  <span class="hidden-xs">Browse …</span><input id="input-b1" name="input-b1" type="file" class="file"></div>
    </div>
</div></div>
                                    </div>
                                    <p>(Supports PDF, Docx and Doc. Maximum File Size : 2MB)</p>
                                    <!-- check1 -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms1" name="terms1" data-error="you should accept the terms before sending a request" required checked>
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
                                   <!-- Captcha -->
                                   <div class="form-group">
                                   <input type="hidden" name="_token" value="<?php echo csrf_token();?>"><?php echo captcha_img('flat');?><input class="form-control" data-error="Please enter the captcha." id="captcha" placeholder="captcha" name="captcha" type="text"  style="max-width: 50%; display: inline-block;" />
                                   <a href="javascript:void(0)" onclick="refreshCaptcha()">Refresh</a>
                                   <div class="help-block with-errors"></div>
                                        </div>
                                   
                                    <!-- check3 -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms3" name="terms3"  data-error="you should accept the terms before sending a request" required checked>
                                            I have read and accepted the <a href="#">Terms of Use and Personal Data Policy</a>.
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