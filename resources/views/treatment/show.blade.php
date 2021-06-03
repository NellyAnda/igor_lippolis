@foreach ($treatment as $treatment)

<div class="homepage_treatment_container">
	<div class="homepage_treatment">
    <div class="">  
			
		</div>
		<a href="{{route('treatments', ['treatment' => $treatment->treatment_path])}}">
      <img src=" {{asset($treatment->picture)}} " 
			alt=" {{ ($treatment->treatment_picture_description) }}" >
			<h4>{{$treatment->treatment_name}}</h4> 
		</a> 
	</div>
</div> 

@endforeach

