 <!-- Section -->
 <section class="page-section" style="background-color: #f4f4f4">	
 <div class="container">
 <style>
 .ht3{
    font-size: 20px;
    color: white;
    padding: 2px 2px 2px 10px;
    background-color: #010101;
 }
 
 </style>

<h1>Search results for "{{$query}}"</h1>
<?php 
$count=count($pm1)+count($pms1)+count($pmp1)+count($pmp2)+count($pms2)+count($pm2)+count($pmp3)+count($pages)+count($services);
if (count($pages)>=1){?>


    <div class="row"><div class="col-sm-12 col-md-8"><h3 class="ht3">Pages:</h3> </div></div>    
    <div class="row">
    <ul>

        @foreach($pages as $page)
            
            <li><a href="{{URL::to('/'.$page->slug)}}">{{$page->slug}}</a></li>

        @endforeach 

    </ul>
    </div>
<?php
}

if ((count($pm1)>=1)||(count($pms1)>=1)||(count($pmp1)>=1)||(count($pmp2)>=1)||(count($pms2)>=1)||(count($pm2)>=1)||(count($pmp3)>=1)||(count($services)>=1)){
?>

 <!-- begin IG-->
<?php
if($pm1->contains('category','4'))echo '<div class="row"><div class="col-sm-12 col-md-8"><h3 class="ht3">Installation Generale:</h3></div></div> ';


if (count($pm1)>=1){?>
<div class="row">
<ul>
        @foreach($pm1 as $ig)
            @if($ig->s_cat->id==4)
            <li><a href="{{URL::to('/installation_generale')}}">{{$ig->p_subcategories}}</a></li>
            @endif
        @endforeach 
    </ul>   
    </div> 
<?php
}
?>
<?php
if (count($pms1)>=1){?>
<div class="row">
 <ul>
        @foreach($pms1 as $igs)
        @if($igs->s_s_cat->s_cat->id==4)
            <li><a href="/products/IG/{{$igs->s_s_cat->p_subcategories}}/{{$igs->name}}">{{$igs->name}}</a></li>
            @endif
        @endforeach 
    </ul> 
    </div>   
<?php
}
?>
<?php
if (count($pmp1)>=1){?>
<div class="row">
 <ul>

        @foreach($pmp1 as $igp)
        @if($igp->pr->s_s_cat->s_cat->id==4)
            <li><a href="/products/IG/{{$igp->pr->s_s_cat->p_subcategories}}/{{$igp->pr->name}}">{{$igp->name}}</a></li>
        @endif
        @endforeach 

    </ul>
    </div>
<?php
}
?>
 <!-- end IG-->
 <!-- begin AV-->
<?php
if($pm1->contains('category','10'))echo '<div class="row"><div class="col-sm-12 col-md-8"><h3 class="ht3">Audio Visuel & Éclairage:</h3></div></div> ';


if (count($pm1)>=1){?>
<div class="row">
<ul>
        @foreach($pm1 as $av)
            @if($av->s_cat->id==10)
            <li><a href="{{URL::to('/audio-visuel-and-eclairage')}}">{{$av->p_subcategories}}</a></li>
            @endif
        @endforeach 
    </ul>
    </div>    
<?php
}
?>
<?php
if (count($pms1)>=1){?>
<div class="row">
 <ul>
        @foreach($pms1 as $avs)
        @if($avs->s_s_cat->s_cat->id==10)
            <li><a href="/products/AV/{{$avs->s_s_cat->p_subcategories}}/{{$avs->name}}">{{$avs->name}}</a></li>
            @endif
        @endforeach 
    </ul> 
    </div>   
<?php
}
?>
<?php
if (count($pmp1)>=1){?>
<div class="row">
 <ul>
        @foreach($pmp1 as $avp)
        @if($avp->pr->s_s_cat->s_cat->id==10)
            <li><a href="/products/AV/{{$avp->pr->s_s_cat->p_subcategories}}/{{$avp->pr->name}}">{{$avp->name}}</a></li>
        @endif
        @endforeach 

    </ul>
    </div>
<?php
}
?>
 <!-- end AV-->
 <!-- begin L-->
<?php
if($pm1->contains('category','20'))echo '<div class="row"><div class="col-sm-12 col-md-8"><h3 class="ht3">Location de Mobilier et Accessoires:</h3></div></div> ';


if (count($pm1)>=1){?>
<div class="row">
<ul>
        @foreach($pm1 as $ig)
            @if($ig->s_cat->id==20)
            <li><a href="{{URL::to('/Location_Mobilier_Accessoires')}}">{{$ig->p_subcategories}}</a></li>
            @endif
        @endforeach 
    </ul> 
    </div>   
<?php
}
?>
<?php
if (count($pms1)>=1){?>
<div class="row">
 <ul>
        @foreach($pms1 as $igs)
        @if($igs->s_s_cat->s_cat->id==20)
            <li><a href="/products/IG/{{$igs->s_s_cat->p_subcategories}}/{{$igs->name}}">{{$igs->name}}</a></li>
            @endif
        @endforeach 
    </ul>   
    </div> 
<?php
}
?>
<?php
if (count($pmp1)>=1){?>
<div class="row">
 <ul>

        @foreach($pmp1 as $igp)
        @if($igp->pr->s_s_cat->s_cat->id==20)
            <li><a href="/products/LMA/{{$igp->pr->s_s_cat->p_subcategories}}/{{$igp->pr->name}}">{{$igp->name}}</a></li>
        @endif
        @endforeach 

    </ul>
    </div>
<?php
}
?>
 <!-- end L-->
  <!-- begin projects-->
  <?php
if ((count($pm2)>=1)||(count($pms2)>=1)||(count($pmp2)>=1)) echo'  <div class="row"><div class="col-sm-12 col-md-8"><h3 class="ht3">Exposition:</h3></div></div> ';
if (count($pm2)>=1){?>
<div class="row">
 <ul>
        @foreach($pm2 as $pm)
            <li><a href="/projects/{{$pm->name}}">exhibition/{{$pm->name}}</a></li>            
        @endforeach 
    </ul>   
    </div> 
<?php
}
?>
  <?php
if (count($pms2)>=1){?>
<div class="row">
 <ul>
        @foreach($pms2 as $pm)
            <li><a href="/projects/{{$pm->name}}">{{$pm->e_scat->name}}{{$pm->name}}</a></li>            
        @endforeach 
    </ul> 
    </div>   
<?php
}
?>
 <?php
if (count($pmp2)>=1){?>
<div class="row">
 <ul>
        @foreach($pmp2 as $pr)
            <li><a href="/projects/{{$pr->e_cat->e_scat->name}}">exhibition/{{$pr->e_cat->e_scat->name}}/{{$pr->e_cat->name}}/{{$pr->name}}</a></li>
        @endforeach 
    </ul>
    </div>
<?php
}
?>
 <!-- end projects-->
 <!-- begin deco-->
 <?php
if (count($pmp3)>=1){
    echo'<div class="row"><div class="col-sm-12 col-md-8">  <h3 class="ht3">Déco & Scénographie:</h3></div></div> ';
    ?>
    <div class="row">
 <ul>
        @foreach($pmp3 as $pm)
            <li><a href="/decoration">{{$pm->e_cat->name}}/{{$pm->name}}</a></li>
        @endforeach 

    </ul>
    </div>
<?php
}
?>
 <!-- end deco-->
  <!-- begin services-->
  <?php
if (count($services)>=1){
    echo' <div class="row"><div class="col-sm-12 col-md-8"> <h3 class="ht3">Services exposants:</h3></div></div> ';
    ?>
    <div class="row">
 <ul>
        @foreach($services as $service)
            <li><a href="/services">services/{{$service->service}}</a></li>
        @endforeach 

    </ul>
    </div>
<?php
}
?>
 <!-- end services-->
you have {{$count}} results.
<?php 
}
else {?> <p>no results </p><?php };?>
</div>
</section>
            <!-- End Section -->