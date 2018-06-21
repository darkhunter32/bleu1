<div class="google-map">
                
                <div data-address="Casablanca, Maroc" id="map-canvas" data-address2="Dubai" data-address3="Côte d'Ivoire"></div>
                
            
                <div class="map-section">
                    
                    <div class="map-toggle">
                        <div class="mt-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                        <div class="mt-text font-alt">
                            <div class="mt-open">{{ $constants[59]->constant }} <i class="fa fa-angle-down"></i></div>
                            <div class="mt-close">{{ $constants[60]->constant }} <i class="fa fa-angle-up"></i></div>
                        </div>
                    </div>
                    
                </div>
                
            </div>