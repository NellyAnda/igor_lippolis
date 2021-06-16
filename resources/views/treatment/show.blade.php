<div class="treatment_cards_container bottom_spacing">
	@foreach ($treatment as $treatment)
	<div class="treatment_cards">
		<a href="{{route('treatments')}}#{{ $treatment->treatment_path }}">
			<h4 class="align treatment_cards_titles">{{$treatment->treatment_name}}</h4>
			<img src=" {{ asset('storage/'.$treatment->picture) }} " alt=" {{ ($treatment->treatment_picture_description) }}" >
		</a> 
	</div>
	@endforeach
</div>
