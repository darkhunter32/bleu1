<section class="page-section" style="background-color: #f4f4f4">
                <div class="container relative">
                <?php
                                $er="";
                                if(!empty($error)) $er=$error;
                                echo $er;
                                ?>
                                <?php $constants = App\CTranslate::all()->translate(config('global.lang_trans'));?>
                    <p>
                    {{$constants[14]->constant}}
                    </p>
	            </div>
</section>