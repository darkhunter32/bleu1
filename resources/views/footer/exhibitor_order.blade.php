
<script type="text/javascript" src="{{ url('/') }}/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/jquery.timeline.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/image.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/lightbox.js"></script>
<script src="{{ url('/') }}/js/chosen.jquery.js" type="text/javascript"></script>
  <script src="{{ url('/') }}/js/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="{{ url('/') }}/js/init.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

//select the fthird index
<?php $exhibitions = App\Exhibition::all()->sortBy('from')->translate(config('global.lang_trans'));?>


$(function() {
    $('.timeline').timeline({
		openTriggerClass : '.read_more',
		startItem : "{{ \Carbon\Carbon::parse($exhibitions[1]->from)->format('d/m/Y')}}",
		closeText : 'x',
		ajaxFailMessage: 'This ajax fail is made on purpose. You can add your own message here, just remember to escape single quotes if you\'re using them.'
	});
	$('.timeline').on('ajaxLoaded.timeline', function(e){
		var height = e.element.height()-60-e.element.find('h2').height();
		e.element.find('.timeline_open_content span').css('max-height', height).mCustomScrollbar({
			autoHideScrollbar:true,
			theme:"light-thin"
		});	
	});
			});

</script>

  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
	$( "#datepicker_from" ).datepicker({
  dateFormat: "yy-mm-dd"
});
	$( "#datepicker_to" ).datepicker({
  dateFormat: "yy-mm-dd"
});

  });
	$( document ).ready(function() {
		if (!$(".item")[0]){
		$("#error").html('<div style="min-height:500px; width:80%"><div class="alert alert-warning" style="background-color:#f5e9d9"><strong>Warning!</strong> No Results for your search.</div></div>');
		$("#timeline").css("display","none");
}
});
  </script>