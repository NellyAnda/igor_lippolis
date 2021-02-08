@extends('layouts.app')

@section('content')
<div class="container">
	<div>
		<h2>Conectarse</h2>
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="label_input_container">
					<label for="email" class="">{{ __('E-Mail Address') }}</label>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			<div class="label_input_container">
				<label for="password" class="">{{ __('Password') }}</label>
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				@error('password')
				<span class="" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="">
				<div class="">
					<div>
						@if (Route::has('password.request'))
						<a class= href="{{ route('password.request') }}">
							{{ __('Contraseña olvidada') }}
						</a>
						@endif
					</div>
					<div class="">
						<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="" for="remember">
							{{ __('Recordarme') }}
						</label>
					</div>
				</div>
			</div>
			<div class="form-group row mb-0">
				<div class="col-md-8 offset-md-4">
					<button type="submit" class="button_text">
						{{ __('INICIAR SESIÓN') }}
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
