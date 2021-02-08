@extends('layouts.app')


@section('content')


<div class="">
	<h2>Crear una cuenta</h2>
	<div class="">
		<div>Ya tengo una cuenta</div>
		<div>
			<button type="submit" class="">
			{{ __('CONECTARSE') }}</button>
		</div>
		<div class="">
			<div class="">				
				<div class="">
					<h2>Para pedir una cita, hazte una cuenta</h2>
					<form method="POST" action="{{ route('register') }}">
						@csrf
						
						<div class="">
							<label for="name" class="">{{ __('Apellidos') }}</label>
							
							<div class="">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						
						<div class="">
							<label for="first_name" class="">{{ __('Nombre') }}</label>
							
							<div class="">
								<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
								
								@error('first_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>	

						<div class="form-group row">
							<label for="address" class="">{{ __('Dirección completa') }}</label>
							
							<div class="">
								<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
								
								@error('address')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>	

						<div class="form-group row">
							<label for="phone_number" class="">{{ __('Número de teléfono') }}</label>
							
							<div class="">
								<input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
								
								@error('phone_number')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>	

						<div class="form-group row">
							<label for="email" class="">{{ __('Correo electronico') }}</label>
							
							<div class="">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
								
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						
						<div class="form-group row">
							<label for="password" class="">{{ __('Contraseña') }}</label>
							
							<div class="">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
								
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						
						<div class="form-group row">
							<label for="password-confirm" class="">{{ __('Repetir contraseña') }}</label>
							
							<div class="">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="form-group row">
							<label for="message" class="">{{ __('Mensaje') }}</label>
							
							<div class="">
								<input id="message" type="textarea" class="form-control @error('Mensaje') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message">
								
								@error('message')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<input type="checkbox" id="checkbox" name="checkbox" required>
							
							<div class="">
								<label for="checkbox"> Acepto los términos y condiciones, la política de privacidad y el tratamiento de mis datos</label><br>
								
								@error('checkbox')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="">
									{{ __('REGISTRAR') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection