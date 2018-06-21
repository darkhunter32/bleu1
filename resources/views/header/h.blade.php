<!DOCTYPE html>
<html>
  <?php $Base_Link= "";?>
   
   @include('header.header')
    <body class="appear-animate">

    <?php $url=Route::getFacadeRoot()->current()->uri();?> 
<?php if ((\Request::is('*/references'))||(\Request::is('references')))
{?> 
@include('content.top_pdf')
<?php } ?>
     
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">