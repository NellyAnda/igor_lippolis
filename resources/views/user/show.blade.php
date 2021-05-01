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
		<div class="top_spacing bottom_spacing align">
			<p class="brown_emphasis">Apellidos :</p>
			<p> {{ $user->name }} </p>
		</div>
		<div class="bottom_spacing align">
			<p class="brown_emphasis"><span >Nombre :</p>
				<p> {{ $user->first_name }} </p>
			</div>
			<div class="bottom_spacing align">
				<p class="brown_emphasis">Dirección :</p>
				<p> {{ $user->address }} </p>
			</div>
			<div class="bottom_spacing align">
				<p class="brown_emphasis">Número de teléfono :</p>
				<p> {{ $user->phone_number }} </p>
			</div>
			<div class="bottom_spacing align">
				<p class="brown_emphasis">Correo electronico :</p>
				<p> {{ $user->email }} </p>
			</div>
		</div>	
		<div class="top_spacing bottom_spacing align">	
			<a href="{{route('User.edit', ['User' => $user->id])}}"><button class="button_text">Modificar su perfil</button></a>
		</div>	
	</div>
	@if(session()->has('message-new-password'))
	<div>
		{{ session()->get('message-new-password') }}
	</div>
	@elseif(session()->has('message-new-data'))
	<div>
		{{ session()->get('message-new-data') }}
	</div>
	@endif
</div>
@endsection