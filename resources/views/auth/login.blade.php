@extends('layouts.app')

@section('pageTitle', 'Conectarse')

@section('image_header')
<div class="connection_background_picture">
	<h1>Conectarse</h1>
</div>
@endsection

@section('content')
<div>
	<h2>Conectarse</h2>
	<div class="connection_container">
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="login_label_input_container">
				<label for="email" class="">{{ __('Correo electronico') }}</label>
				<input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="login_label_input_container">
				<label for="password" class="">{{ __('Contraseña') }}</label>
				<input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				@error('password')
				<span class="" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="forgotten_password">
				@if (Route::has('password.request'))
				<a href="{{ route('password.request') }}">
					{{ __('Contraseña olvidada') }}
				</a>
				@endif
			</div>
			<div class="checkbox_container">
				<input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
				<label class="checkbox_container_text" for="remember">
					{{ __('Recordarme') }}
				</label>
			</div>
			<div class="buttons_container align">
				<button type="submit" class="button_text">
					{{ __('INICIAR SESIÓN') }}
					{{-- mot de passe correct, redirection vers prise de rdv --}}
				</button>
			</div>
		</form>
	</div>
</div>
@endsection
