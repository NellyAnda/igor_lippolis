@extends('layouts.app')

@section('content')
<div class="container">
		<div class="card">
			<div class="card-body row">
				
				<div class="col">
					<h2 class="">Votre Compte</h2>
					
					
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
	</div>
</div>
@endsection