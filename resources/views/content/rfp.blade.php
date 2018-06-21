<div class="row" style="font-size: 12px;color: #555;">
<?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
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
                                        <input class="form-control" data-error="{{$constants[17]->constant}}" id="First_Name" name="First_Name" placeholder="{{$constants[18]->constant}}"  type="text" required  value="<?php echo isset($_POST['First_Name']) ? $_POST['First_Name'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Company Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="{{$constants[19]->constant}}" id="Company_Name" name="Company_Name" placeholder="{{$constants[20]->constant}}"  type="text" required value="<?php echo isset($_POST['Company_Name']) ? $_POST['Company_Name'] : '' ?>" />
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>

                                  <!-- right col --><div class="cf-right-col">
                                        <!-- Last Name -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="{{$constants[21]->constant}}" id="Last_Name" name="Last_Name" placeholder="{{$constants[22]->constant}}"  type="text" required value="<?php echo isset($_POST['Last_Name']) ? $_POST['Last_Name'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>  
                                        <!-- Job Title -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="{{$constants[23]->constant}}" id="Job_Title" name="Job_Title" placeholder="{{$constants[24]->constant}}"  type="text" required value="<?php echo isset($_POST['Job_Title']) ? $_POST['Job_Title'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>

                                    <!-- Company Adress -->
                                    <div class="form-group">
                                        <textarea class="form-control" data-error="{{$constants[25]->constant}}" id="Company_Adress" name="Company_Adress" placeholder="{{$constants[26]->constant}}"  type="text" required ><?php echo isset($_POST['Company_Adress']) ? $_POST['Company_Adress'] : '' ?></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- left col --><div class="cf-left-col">
                                        <!-- City -->
                                        <div class="form-group">
                                        <select name="City" class="form-control" required data-error="{{$constants[27]->constant}}" >
                                            <option value="" disabled <?php if(!isset($_POST['City'])) echo $constants[28]->constant;?>>{{$constants[29]->constant}}</option>
                                            <?php $locations = App\City::all()->sortBy('id')->translate(config('global.lang_trans'));
                    foreach($locations as $location){
                      echo '<option value="'.$location->name.'"'; if (isset($_POST['City']) && $_POST['City']==$location->name) echo $constants[28]->constant;echo ">".$location->name.'</option>';
                       } ?>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Country Code -->
                                        <div class="form-group">
                                            <input class="form-control" data-error="{{$constants[30]->constant}}" id="Country_code" name="Country_code" placeholder="{{$constants[31]->constant}}"  type="text" required  pattern="\d{3,}$" value="<?php echo isset($_POST['Country_code']) ? $_POST['Country_code'] : '' ?>"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>
                                    <!-- right col --><div class="cf-right-col">
                                        <!-- Zip Code -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="{{$constants[32]->constant}}" id="Zip_Code" name="Zip_Code" placeholder="{{$constants[33]->constant}}"  type="text" required value="<?php echo isset($_POST['Zip_Code']) ? $_POST['Zip_Code'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>  
                                        <!-- Phone Number -->
                                        <div class="form-group">
                                        <input class="form-control" data-error="{{$constants[34]->constant}}" id="Phone_Number" name="Phone_Number" placeholder="{{$constants[35]->constant}}"  type="tel" required  pattern="\d{9,}$" value="<?php echo isset($_POST['Phone_Number']) ? $_POST['Phone_Number'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>

                                    <!-- E-mail -->
                                    <div class="form-group">
                                        <input class="form-control" data-error="{{$constants[36]->constant}}" id="Email" name="Email" placeholder="E-mail"   type="email" required value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : '' ?>"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <!-- Project City -->
                                     <div class="form-group">
                                        <select name="PCity" class="form-control" required data-error="{{$constants[27]->constant}}">
                                        <option value="" disabled <?php if(!isset($_POST['City'])) echo $constants[28]->constant;?>>{{$constants[37]->constant}}</option>
                                            <?php $locations = App\City::all()->sortBy('id')->translate(config('global.lang_trans'));
                    foreach($locations as $location){
                      echo '<option value="'.$location->name.'"'; if ((isset($_POST['City']) && $_POST['City']==$location->name)||(isset($ct) && $ct==$location->name)) echo $constants[28]->constant;echo ">".$location->name.'</option>';
                       } ?>
                                     
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- Exhibition (gets a value from exhibition page) -->
                                     <div class="form-group">
                                        <select name="Exhibition" class="form-control" required data-error="{{$constants[38]->constant}}">
                                            <option value="" disabled <?php if(!isset($_POST['Exhibition'])) echo $constants[28]->constant;?>>{{$constants[39]->constant}}</option>
                                            <?php $exhibitions = App\Exhibition::all()->sortByDesc('id')->translate(config('global.lang_trans'));?>
                     @foreach($exhibitions->filter(function ($item) {
                        return \Carbon\Carbon::parse($item->from)->format('Y') == date("Y");
                    }) as $exhibition)
                   <option value="{{ $exhibition->name }}"<?php if ((isset($_POST['Exhibition']) && $_POST['Exhibition']==$exhibition->name)||(isset($exb) && $exb==$exhibition->name)) echo $constants[28]->constant;?>>{{ $exhibition->name }}</option>
                     

                                 @endforeach           
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <!-- left col --><div class="cf-left-col">
                                        <!-- Budget -->
                                        <div class="form-group">
                                            <input class="form-control" data-error="{{$constants[40]->constant}}" id="Budget" name="Budget" placeholder="Budget"  type="text" required  pattern="\d{4,}$" value="<?php echo isset($_POST['Budget']) ? $_POST['Budget'] : '' ?>"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    <!-- End left col --></div>
                                    <!-- right col --><div class="cf-right-col">
                                       <!-- Currency -->
                                     <div class="form-group">
                                        <select name="Currency" class="form-control" required data-error="{{$constants[41]->constant}}">
                                            <option value="" disabled <?php if(!isset($_POST['Currency'])) echo $constants[28]->constant;?>>{{$constants[42]->constant}}</option>
                                            <option value="MAD" <?php if (isset($_POST['Currency']) && $_POST['Currency']=="MAD") echo $constants[28]->constant;?>>{{$constants[43]->constant}}</option>
                                            <option value="EUR" <?php if (isset($_POST['Currency']) && $_POST['Currency']=="EUR") echo $constants[28]->constant;?>>Euro(EUR)</option>
                                            <option value="USD" <?php if (isset($_POST['Currency']) && $_POST['Currency']=="USD") echo $constants[28]->constant;?>>{{$constants[44]->constant}}</option>
                                            
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                   <!-- End right col --> </div>
                                        <!-- Details -->
                                    <div class="form-group">
                                        <textarea class="form-control" data-error="{{$constants[45]->constant}}" id="details" name="details" placeholder="{{$constants[46]->constant}}" required ><?php echo isset($_POST['details']) ? $_POST['details'] : '' ?></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <link href="{{ url('/') }}/css/fileinput.min.css" rel="stylesheet" type="text/css">
                                       <!-- Attachement -->
                                       <div class="form-group">
                                     
                                       <label class="btn btn-default"><input type="file" hidden id="attachement" name="attachement"></label>
                                    </div>
                                    <p>{{$constants[47]->constant}}</p>
                                    <!-- check1 -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms1" name="terms1" data-error="{{$constants[48]->constant}}" required>
                                            {{$constants[49]->constant}}</label>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <!-- check2  this is related to mass mailing-->
                                    <div class="form-group" style="display:none">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms2" name="terms1" data-error="{{$constants[50]->constant}}" required checked>
                                            {{$constants[51]->constant}}
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
                                   <input type="hidden" name="_token" value="<?php echo csrf_token();?>"><?php echo captcha_img('flat');?></div><input class="form-control" data-error="{{$constants[53]->constant}}" id="captcha" placeholder="captcha" name="captcha" type="text"  style="max-width: 50%; display: inline-block;" required />
                                   <a href="javascript:void(0)" onclick="refreshCaptcha()" style="color: #111 !important;"><span class="glyphicon" style="font-size: 20px;">&#xe031;</span></a>
                                   <div class="help-block with-errors"></div>
                                        </div>
                                   
                                    <!-- check3 -->
                                    <div class="form-group">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms3" name="terms3"  data-error="{{$constants[52]->constant}}" required>
                                            {{$constants[55]->constant}} <a href="#" style="color: #111 !important;">{{$constants[56]->constant}}</a>.
                                        </label>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Inform Tip -->                                        
                                        <div class="form-tip pt-20">
                                            <i class="fa fa-info-circle"></i> {{$constants[6]->constant}}
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Send Button -->
                                        <div class="align-right pt-10">
                                        <button class="submit_btn btn btn-mod btn-medium btn-round" type="submit">{{$constants[57]->constant}}</button>
                                        </div>
                                        
                                    </div>
                                    
                                </div>                      
                                <div id="result"></div>
                                {{ Form::close() }}
                            
                        </div>
                    </div>