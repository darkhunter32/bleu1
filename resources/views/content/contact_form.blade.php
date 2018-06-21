<div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <form class="form contact-form" id="contact_form">
                            <?php echo Form::token();?>
                                <div class="clearfix">
                                <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                                    <div class="cf-left-col">
                                        
                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="input-md round form-control" placeholder="{{$constants[2]->constant}}" pattern=".{3,100}" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                        </div>
                                         <!-- Tel -->
                                        <div class="form-group">
                                            <input type="tel" name="tel" id="tel" class="input-md round form-control" placeholder="{{$constants[3]->constant}}" pattern=".{9,100}" required>
                                        </div>
                                          <!-- Société -->
                                        <div class="form-group">
                                            <input type="text" name="societe" id="societe" class="input-md round form-control" placeholder="{{$constants[4]->constant}}" pattern=".{3,100}" required>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        <!-- Subject -->
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subject" class="input-md round form-control" placeholder="{{$constants[5]->constant}}" pattern=".{3,100}" required>
                                        </div>
                                        <!-- Message -->
                                        <div class="form-group">                                            
                                            <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                                        </div>
                                        
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
                                            <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">{{$constants[7]->constant}}</button>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                
                                <div id="result"></div>
                            </form>
                            
                        </div>
                    </div>