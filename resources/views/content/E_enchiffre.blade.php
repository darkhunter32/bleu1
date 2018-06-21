<section class="page-section">
                <div class="container relative">
                    
                    <!-- Service Grid -->
                    <div class="alt-service-grid">
                        <div class="row multi-columns-row">
                        <?php $npfs = App\Npf::all()->sortBy('id')->take(4)->translate(config('global.lang_trans')); ?>

                        @foreach($npfs as $npf)
                            <!-- Alt Service Item -->
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="alt-service-item">
                                    <div class="alt-service-icon">
                                        <i class="fa fa-{{ $npf->icon }}"></i>
                                    </div>
                                    <h3 class="alt-services-title font-alt">{{ $npf->title }}</h3>
                                    {{ $npf->txt }}
                                </div>
                            </div>
                            <!-- End Service Item -->
                        @endforeach
                            
                        </div>
                    </div>
                    <!-- End Service Grid -->
                
                </div>
            </section>