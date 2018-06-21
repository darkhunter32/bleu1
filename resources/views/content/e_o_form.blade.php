<div id="form" style="z-index: 20;position: relative;width: 100%;text-align: center;">
<style>
#datepicker_from,#datepicker_to{
    background:url(images/calendar.png) right 5px bottom 2px no-repeat;
}
select::placeholder {
  color: #ccc !important;
}

</style>
{{ Form::open(array('url' => Lang::locale().'/exhibitor_order','class'=>'form-inline','id'=>'form_timeline')) }}

<div class="form-group">
   
    {{ Form::text('date_from', '', array('id' => 'datepicker_from','class' => 'form-control','placeholder'=>'From') )}}
  </div>
  <div class="form-group">
    
    {{ Form::text('date_to', '', array('id' => 'datepicker_to','class' => 'form-control','placeholder'=>'To') )}}
  </div>

<div class="form-group">
   
    {{ Form::text('exhibition', '', array('class' => 'form-control','placeholder'=>'Exhibition Name','id'=>'Exhibition_Name')) }}
  </div>



<div class="form-group">
    <style>
      .chosen-container-multi .chosen-choices{min-width:200px !important;border: 1px solid #ccc !important;
    border-radius: 4px !important;height:34px !important}
    .search-field{display:none; overflow-y: auto !important}
    .chosen-container .chosen-drop{min-width:200px}
    .chosen-container-multi{min-width:200px}
    .chosen-choices{overflow-y: auto !important}
    .search-choice{}
    </style>

    <select multiple class="chosen-select" id="location" name="location[]" data-placeholder="Location/s" >
    
    <?php $locations = App\City::all()->sortBy('id')->translate(config('global.lang_trans'));
                    foreach($locations as $location){
                      echo '<option value="'.$location->id.'">'.$location->name.'</option>';
                       } ?>
</select>
  </div>


{{Form::submit('Search', array('class' => 'btn btn-warning'))}}
<script>
function res() {
    document.getElementById("datepicker_from").value="";
    document.getElementById("datepicker_to").value="";
    document.getElementById("Exhibition_Name").value="";
    $('select#location option').removeAttr("selected");
    $('#location').trigger("chosen:updated");
}
</script>
<input type="button" onclick="res()" value="Clear form" class="btn btn-default">
{{ Form::close() }}


</div>  