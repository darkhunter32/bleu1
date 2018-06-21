<!-- JS -->
        <script type="text/javascript" src="{{ url('/') }}/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="{{ url('/') }}/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.appear.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/owl.carousel.min.js"></script>      
        <script type="text/javascript" src="{{ url('/') }}/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.magnific-popup.min.js"></script>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXVctDcGYFasOPtmC-JmrkadLEc5PZIds&region=MA"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/gmap3.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/wow.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.custombox.js"></script>
		<script type="text/javascript" src="{{ url('/') }}/js/jquery.colorbox.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <?php $url=Route::getFacadeRoot()->current()->uri();?>  
    
    <?php if ((\Request::is('*/references'))|| (\Request::is('references'))){?>@include('footer.3dflipbook')<?php } ?>
       
        <script type="text/javascript" src="{{ url('/') }}/js/all.js"></script>        
        <script type="text/javascript" src="{{ url('/') }}/js/contact-form.js"></script>
        <script type="text/javascript" src="{{ url('/') }}/js/jquery.ajaxchimp.min.js"></script>   
        <?php        
        if ((\Request::is('*/company'))|| (\Request::is('*/installation_generale')) || (\Request::is('IG/*')) || (\Request::is('*/IG/*'))|| (\Request::is('GI/*')) || (\Request::is('*/GI/*')) || (\Request::is('AV/*')) || (\Request::is('*/AV/*'))|| (\Request::is('*/VA/*'))|| (\Request::is('VA/*'))|| (\Request::is('*/Location_Mobilier_Accessoires'))||  (\Request::is('*/audio-visuel-and-eclairage'))|| (\Request::is('*/exhibition'))|| (\Request::is('*/references'))||(\Request::is('company'))|| (\Request::is('installation_generale'))|| (\Request::is('Location_Mobilier_Accessoires'))||  (\Request::is('audio-visuel-and-eclairage'))|| (\Request::is('exhibition'))|| (\Request::is('references'))|| (\Request::is('LMA/*')) || (\Request::is('*/LMA/*'))|| (\Request::is('*/FAR/*'))|| (\Request::is('FAR/*')))
    {?>
    @include('footer.slider_c')
    <?php } ?>

<?php if ((\Request::is('*/installation_generale'))|| (\Request::is('*/audio-visuel-and-eclairage'))|| (\Request::is('*/Location_Mobilier_Accessoires'))||(\Request::is('installation_generale')) || (\Request::is('audio-visuel-and-eclairage'))|| (\Request::is('Location_Mobilier_Accessoires')) )
 {?> @include('footer.expand')
   <?php } ?>

<?php if ((\Request::is('products/*'))||(\Request::is('*/products/*'))) {?> @include('footer.expand2') <?php } ?>
<?php if ((\Request::is('*/ig_products'))||(\Request::is('/ig_products'))) {?> @include('footer.expand2') <?php } ?>
<?php if ((\Request::is('*/services'))||(\Request::is('/services'))) {?> @include('footer.expand3') <?php } ?>

<?php if ((\Request::is('*/exhibitor_order'))||(\Request::is('exhibitor_order'))) {?>
@include('footer.exhibitor_order')
<?php } ?>
 <?php if ((\Request::is('request_for_proposal/*')) || (\Request::is('request_for_proposal'))|| (\Request::is('*/request_for_proposal'))) {?> @include('footer.rfp') <?php } ?>

        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
    
     <?php if ((\Request::is('IG/*')) || (\Request::is('*/IG/*'))|| (\Request::is('*/GI/*'))|| (\Request::is('GI/*')) || (\Request::is('AV/*')) || (\Request::is('*/AV/*'))|| (\Request::is('*/VA/*'))|| (\Request::is('VA/*'))|| (\Request::is('LMA/*')) || (\Request::is('*/LMA/*'))|| (\Request::is('*/FAR/*'))|| (\Request::is('FAR/*'))){?> @include('footer.js.grid3')
   <?php } ?>   

    <script src="{{ url('/') }}/js/menu/megamenu.js"></script>

    
    


    