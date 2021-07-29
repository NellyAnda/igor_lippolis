@extends('layouts.app')

@section('pageTitle', 'Citas de los patientes')

@section('image_header')
<div class="admin_background_picture">
  <h1>Citas de los patientes</h1>
</div>
@endsection

{{-- créer 2 onglets avec rdv à venir et historique des rdv --}}



@section('content')



@foreach ($appointments as $appointment)
<div>
  
  <p>{{$appointment->appointment_date}}</p>
  <p>{{$appointment->appointment_time}}</p>
  <p>{{$appointment->place}}</p>

  
  <p>{{$appointment->user->name}}</p>
  <p>{{$appointment->user->first_name}}</p>
  <p>{{$appointment->user->address}}</p>
  <p>{{$appointment->user->phone_number}}</p>
  <p>{{$appointment->user->email}}</p>

  

</div>
    
@endforeach

@endsection
