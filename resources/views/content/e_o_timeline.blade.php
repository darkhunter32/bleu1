<div id="error" style="margin-top:80px;"></div>
<div id="timeline" style="margin-top:80px;">
<!--scripts-->
<?php 
$ex='_%'; $df=date('Y-m-d'); $dt=date('Y-m-d', strtotime('Dec 31'));$l=[];
$cities_id=App\Exhibition::select('location')->groupBy('location')->get()->translate(config('global.lang_trans'));
foreach($cities_id as $id) $l[]=$id->location;
if(! empty($date_from)) $df=$date_from;
if(! empty($date_to)) $dt=$date_to;
if(! empty($location)) { unset($l); $l=$location;};
if(! empty($exhibition)) {
	$all=App\Exhibition::all()
								
								->where('name', 'LIKE', $exhibition)
								->whereIn('location', $l)
								->translate(config('global.lang_trans'));
							}
else {
	$all=App\Exhibition::all()
								
								->whereIn('location', $l)
								->translate(config('global.lang_trans'));
	}

														if ($all->count()==0) { 
echo'<div style="min-height:500px; width:80%"><div class="alert alert-warning" style="background-color:#f5e9d9">
<strong>Warning!</strong> No Results for your search.
</div></div>';}$exhibitions = $all->sortBy('from')->translate(config('global.lang_trans'));$count=0;
?>
	<!-- end scripts-->
<div class="timelineLoader">
	<img src="{{ url('/') }}/images/loadingAnimation.gif">
</div>

<!-- BEGIN TIMELINE -->
<div class="timelineFlat timeline">

@foreach($exhibitions->filter(function ($item) {
    return (\Carbon\Carbon::parse($item->from)->format('Y') == date("Y"));
}) as $exhibition)
<?php if(($exhibition->from >= $df)&& ($exhibition->to <= $dt)){ ?>
			 <!--begin loop-->
			 <div class="item" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}" data-description="{{ $exhibition->name }}" data-count="{{ $count }}">
				 <a class="image_rollover_bottom con_borderImage" data-description="{{ $exhibition->name }}" href="{{ Voyager::image( $exhibition->image ) }}" rel="lightbox[timeline]" >
				 <img src="{{ Voyager::image( $exhibition->image ) }}" alt="" >
				 
	         <div class="image_roll_glass" ></div><div class="image_roll_zoom" ></div></a>
				 <h2 style="font-size:14px; width:100%; text-align:center">{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m')}} <b>-</b> {{ \Carbon\Carbon::parse($exhibition->to)->format('d/m')}}</h2>
				 <h3 style="font-size: 16px;padding-left: 10px;font-weight:bold;padding:10px;border-left:3px solid #111111">{{ $exhibition->name }}</h3>
				 <h4 style="font-size: 12px;padding-left: 10px; margin-top: 20px;margin-bottom: 20px;">{{ $exhibition->city_e->name }}</h4>
				 <div class="read_more" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}" data-count="{{ $count }}" style="position:relative;bottom:-20px" >more infos</div><br>
				 <a href="/request_for_proposal/{{ $exhibition->name }}/{{ $exhibition->city_e->name }}"><div class="read_more"  style="position:relative;bottom:-20px;background: #5a462d;" >Request for proposal</div></a>
			 </div>
			 <div class="item_open" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}" data-access="/exhibition_info/{{$exhibition->id}}" data-count="{{ $count }}" >
				 <div class="item_open_cwrapper" >
				 <div class="t_close" data-count="{{ $count }}" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}">x</div>
				 <div class="item_open_content">
					 <img class="ajaxloader" src="{{ url('/') }}/images/loadingAnimation.gif" alt="">              
				 </div>
			 </div></div>
			 <!--end loop-->
			 <?php goto endcondition;} ?>
<?php
$Fromdate=$exhibition->from;
$Todate=$exhibition->to;

$begin = new DateTime( $Fromdate);
$end = new DateTime( $Todate );
$end = $end->modify( '+1 day' ); 
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);
   foreach ($daterange as $key => $value) {
	//echo $value->format('Y-m-d');
   if(($value->format('Y-m-d')==$df)||($value->format('Y-m-d')==$dt)) { ?>
		<!--begin loop-->
		<div class="item" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}" data-description="{{ $exhibition->name }}" data-count="{{ $count }}">
			<a class="image_rollover_bottom con_borderImage" data-description="ZOOM IN" href="{{ Voyager::image( $exhibition->image ) }}" rel="lightbox[timeline]" >
			<img src="{{ Voyager::image( $exhibition->image ) }}" alt="" >
			
		<div class="image_roll_glass" ></div><div class="image_roll_zoom" ></div></a>
			<h2 style="font-size:14px; width:100%; text-align:center">{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m')}} <b>-</b> {{ \Carbon\Carbon::parse($exhibition->to)->format('d/m')}}</h2>
            <h3 style="font-size: 16px;padding-left: 10px;font-weight:bold;padding:10px;border-left:3px solid #111111">{{ $exhibition->name }}</h3>
            <h4 style="font-size: 12px;padding-left: 10px;    margin-top: 20px;margin-bottom: 20px;">{{ $exhibition->city_e->name }}</h4>
			<div class="read_more" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}" data-count="{{ $count }}" style="position:relative;bottom:-20px">more infos</div><br>
			<a href="/request_for_proposal/{{ $exhibition->name }}/{{ $exhibition->city_e->name }}"><div class="read_more"  style="position:relative;bottom:-20px;background: #5a462d;" >Request for proposal</div></a>
		</div>
		<div class="item_open" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}" data-access="/exhibition_info/{{$exhibition->id}}" data-count="{{ $count }}" >
            <div class="item_open_cwrapper" >
            <div class="t_close" data-count="{{ $count }}" data-id="{{ \Carbon\Carbon::parse($exhibition->from)->format('d/m/Y')}}">x</div>
			<div class="item_open_content">
                <img class="ajaxloader" src="{{ url('/') }}/images/loadingAnimation.gif" alt="">              
			</div>
		</div></div>
		<!--end loop-->
		<?php ;}
		
	}
	endcondition:;
	?>
		<?php  $count=$count+1;?>
		@endforeach		
</div> <!-- /END TIMELINE -->
</div>

