@section('homepage_treatment_card')

@foreach ($homepageTreatments as $homepageTreatment)
    

<div class="homepage_treatment_container">
	<div class="homepage_treatment">
    <div class="">  
			<h4>{{$homepageTreatment->treatment_name}}</h4>
		</div>
		<a href="{{route('treatments', ['treatment' => $homepageTreatment->treatment_path])}}">
      <img src=" {{asset($homepageTreatment->picture)}} " alt=" {{ ($homepageTreatment->treatment_picture_description) }}" > </a> 

	</div>

</div> 

@endforeach

@endsection