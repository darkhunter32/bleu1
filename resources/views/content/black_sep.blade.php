<section class="small-section bg-dark  wow zoomIn" data-wow-delay="0.3s">
                <div class="container relative" >
                    
                    <div class="align-center">
                    <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                        <h3 class="banner-heading font-alt">{{$constants[0]->constant}}</h3>
                        <div class="local-scroll">
                            <a href="/references" class="btn btn-mod btn-w btn-medium btn-round">{{$constants[1]->constant}}</a>
                        </div>
                    </div>
                    
                </div>
            </section>