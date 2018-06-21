<?php $exhibition = App\Exhibition::all()->where('id', '=', $id)->first()->translate(config('global.lang_trans'));?>
<div style="padding:10px">
<h1 style=" color:#d87c0a; font-size:18px;font-weight:bold">{{ $exhibition->name }}</h1>
<h3 style=" color:#444; font-size:13px;">{{ $exhibition->periodicite }}</h3>
<p style="padding:20px;color:#828282">
{{ $exhibition->description }}
</p>
<p style="border-left:4px #d87c0a solid; padding:10px">{{ $exhibition->adress }},{{ $exhibition->city_e->name }},{{ $exhibition->pays }}</p>
@if($exhibition->website)<a href="{{ $exhibition->website }}" target="_blank" style="text-decoration:none;border-left:4px black solid; padding:10px">site officiel</a>@endif
</div>