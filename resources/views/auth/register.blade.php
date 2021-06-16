@extends('layouts.app')

@section('pageTitle', 'Crear una cuenta')

@section('image_header')
<div class="connection_background_picture">
	<h1>Crear una cuenta<br>
		Conectarse</h1>
	</div>
	@endsection
	
	@section('content')
	<div>
		<h2>Crear una cuenta</h2>
		<div class="registration_container connection_registration_container">
			<p class="align">
				<span class="emphasis">Ya tengo una cuenta</span>
			</p>
			<div class="align">
				<a href="{{ route('login') }}">
				<button type="submit" class="button_text">
					{{ __('CONECTARSE') }}</button></a>
				</div>
			</div>
			<h2>Para pedir una cita, hazte una cuenta</h2>
			<div class="registration_container">
				<form method="POST" action="{{ route('register') }}" class="form_container">
					@csrf
					<div class="label_input_container">
						<label for="name" class="">{{ __('Apellidos') }}</label>
						<input id="name" type="text" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="label_input_container">
						<label for="first_name" class="">{{ __('Nombre') }}</label>
						<input id="first_name" type="text" @error('first_name') is-invalid @enderror name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
						@error('first_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>	
					<div class="label_input_container">
						<label for="address" class="">{{ __('Dirección completa') }}</label>
						<input id="address" type="text" @error('address') is-invalid @enderror name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
						@error('address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>	
					<div class="label_input_container">
						<label for="phone_number" class="">{{ __('Número de teléfono') }}</label>
						
						<input id="phone_number" type="tel" @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
						@error('phone_number')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>	

					<div class="label_input_container">
						<label for="email" class="">{{ __('Correo electronico') }}</label>
						<input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					
					<div class="label_input_container">
						<label for="password" class="">{{ __('Contraseña') }}</label>
						<input id="password" type="password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="label_input_container">
						<label for="password-confirm" class="">{{ __('Repetir contraseña') }}</label>
						<input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
					</div>


					<div class="label_input_container message_input">
						<label for="message">{{ __('Mensaje') }}</label>
						<input id="message" type="textarea" class="message" maxlength="1000" placeholder="Máximo 1000 caracteres" @error('Mensaje') is-invalid @enderror name="message" value="{{ old('message') }}" required autocomplete="message">
						@error('message')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="checkbox_container">
						<input type="checkbox" id="checkbox" name="checkbox" required>
						<label class="checkbox_container_text" for="checkbox"> Acepto los términos y condiciones, la política de privacidad y el tratamiento de mis datos</label><br>
						@error('checkbox')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				
					<div class="buttons_container align bottom_spacing">
						<button type="submit" class="button_text">
							{{ __('REGISTRAR') }}
						</button>
					</div>
				</form>
			</div>
		</div>
		@endsection