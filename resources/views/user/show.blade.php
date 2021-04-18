@extends('layouts.app')

@section('pageTitle', 'Su cuenta')

@section('image_header')
<div class="connection_background_picture">
	<h1>Su cuenta</h1>
</div>
@endsection

@section('content')
<div class="container">
	<div class="card">				
		<div class="col">
			<h2 class="">Su cuenta</h2>
			<p>Apellidos : <span> {{ $user->name }} </span></p>
			<p>Nombre : <span> {{ $user->first_name }} </span></p>
			<p>Dirección : <span> {{ $user->address }} </span></p>
			<p>Número de teléfono : <span> {{ $user->phone_number }} </span></p>
			<p>Correo electronico : <span> {{ $user->email }} </span></p>
			<a class="btn btn-primary text-secondary" href="{{route('User.edit', ['User' => $user->id])}}">
				Modificar su perfil
			</a>
		</div>
	</div>
</div>
@if(session()->has('message-new-password'))
	<div class="container-fluid">
		{{ session()->get('message-new-password') }}
	</div>
@elseif(session()->has('message-new-data'))
<div class="container-fluid">
			{{ session()->get('message-new-data') }}
</div>

@endif

</div>
@endsection