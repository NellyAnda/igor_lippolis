@extends('layouts.app')

@section('pageTitle', 'Su cuenta')

@section('image_header')
<div class="connection_background_picture">
	<h1>Su cuenta</h1>
</div>
@endsection

@section('content')
<div>
	<h2>Su cuenta</h2>
	<div class="user_info_containers align">
		@if(session()->has('message-new-password'))
		<div>
			{{ session()->get('message-new-password') }}
		</div>
		@elseif(session()->has('message-new-data'))
		<div>
			{{ session()->get('message-new-data') }}
		</div>
		@endif
		<div class="top_spacing bottom_spacing align">
			<p class="brown_emphasis">Apellidos :</p>
			<p> {{ $User->name }} </p>
		</div>
		<div class="bottom_spacing align">
			<p class="brown_emphasis"><span >Nombre :</p>
				<p> {{ $User->first_name }} </p>
			</div>
			<div class="bottom_spacing align">
				<p class="brown_emphasis">Dirección :</p>
				<p> {{ $User->address }} </p>
			</div>
			<div class="bottom_spacing align">
				<p class="brown_emphasis">Número de teléfono :</p>
				<p> {{ $User->phone_number }} </p>
			</div>
			<div class="bottom_spacing align">
				<p class="brown_emphasis">Correo electronico :</p>
				<p> {{ $User->email }} </p>
			</div>
		</div>	
		<div class="top_spacing bottom_spacing align">	
			<a href="{{route('User.edit', ['User' => $User->id])}}"><button class="button_text">Modificar su perfil</button></a>
		</div>	
	</div>
</div>
<div>
	<div class="">
		<p>Su proxima(s) cita(s):</p>
		@foreach ($appointments as $appointment)
		<div class="">
			<p>El {{ $appointment->appointment_date }} a las {{ $appointment->appointment_time }} a {{ $appointment->place }} </p>
		</div>
		@endforeach
	</div>
</div>
@endsection