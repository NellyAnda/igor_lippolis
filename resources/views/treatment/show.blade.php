@foreach ($treatment as $treatment)

<div class="homepage_treatment_container">
	<div class="homepage_treatment">
    <div class="">  
			<h4>{{$treatment->treatment_name}}</h4> 
		</div>
		<a href="{{route('treatments')}}#{{ $treatment->treatment_path }}">
      <img src=" {{ asset('storage/'.$treatment->picture) }} " alt=" {{ ($treatment->treatment_picture_description) }}" >
		</a> 
	</div>
</div> 

@endforeach
