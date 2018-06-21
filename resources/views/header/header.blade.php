 <head>
 <?php 
  $title='GROUPE MAGHREB EXPO'; 
?>
        <title>@if(!empty($page->title)){{ $page->title }} @else {{$title}} @endif</title>
        <meta name="description" content="@if(!empty($page->meta_description)){{ $page->meta_description }} @else {{$title}} @endif">
        <meta name="keywords" content="@if(!empty($page->meta_keywords)){{ $page->meta_keywords }} @else {{$title}} @endif">
        <meta charset="utf-8">
        
        <meta name="author" content="GROUPE MAGHREB EXPO">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />       
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/style-responsive.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/magnific-popup.css"> 
        <link rel="stylesheet" href="{{ url('/') }}/css/colorbox.css">    
        <link rel="stylesheet" href="{{ url('/') }}/css/dataTables.min.css"> 
        

          <?php $url=Route::getFacadeRoot()->current()->uri();
    if ((\Request::is('*/company'))|| (\Request::is('*/installation_generale')) || (\Request::is('IG/*')) ||(\Request::is('*/IG/*'))|| (\Request::is('*/GI/*'))|| (\Request::is('GI/*'))|| (\Request::is('AV/*')) || (\Request::is('*/AV/*'))|| (\Request::is('*/VA/*'))|| (\Request::is('VA/*')) || (\Request::is('*/Location_Mobilier_Accessoires'))||  (\Request::is('*/audio-visuel-and-eclairage'))|| (\Request::is('*/exhibition'))|| (\Request::is('*/references'))||(\Request::is('*/company'))|| (\Request::is('installation_generale'))|| (\Request::is('Location_Mobilier_Accessoires'))||  (\Request::is('audio-visuel-and-eclairage'))|| (\Request::is('exhibition'))|| (\Request::is('references'))||(\Request::is('company'))|| (\Request::is('LMA/*')) || (\Request::is('*/LMA/*'))|| (\Request::is('*/FAR/*'))|| (\Request::is('FAR/*')))
    {?>
    @include('header.slider_c')
    <?php } ?>

   <?php if ((\Request::is('*/installation_generale')) || (\Request::is('IG/*')) || (\Request::is('*/IG/*'))|| (\Request::is('*/GI/*'))|| (\Request::is('GI/*'))|| (\Request::is('AV/*')) || (\Request::is('*/AV/*'))|| (\Request::is('*/VA/*'))|| (\Request::is('VA/*')) || (\Request::is('*/Location_Mobilier_Accessoires')) || (\Request::is('*/ig_products')) || (\Request::is('*/audio-visuel-and-eclairage'))||(\Request::is('*/services'))||(\Request::is('installation_generale')) || (\Request::is('Location_Mobilier_Accessoires')) || (\Request::is('ig_products')) || (\Request::is('audio-visuel-and-eclairage'))||(\Request::is('services'))|| (\Request::is('LMA/*')) || (\Request::is('*/LMA/*'))|| (\Request::is('*/FAR/*'))|| (\Request::is('FAR/*')))
    {?>
     @include('header.expand')
     <?php } ?>
<?php if ((\Request::is('products/*'))||(\Request::is('*/products/*'))){?>  @include('header.expand') <?php } ?>
<?php if ((\Request::is('*/references'))||(\Request::is('references'))) {?>
    @include('header.3dflipbook')
    <?php } ?>
    <?php if ((\Request::is('*/exhibitor_order'))||(\Request::is('exhibitor_order'))) {?>
    @include('header.exhibitor_order')
    <?php } ?>  
    <link rel="stylesheet" href="{{ url('/') }}/css/menu/style_menu.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/menu/ionicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>  
    </head>