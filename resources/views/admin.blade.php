@extends('layouts.app')

@section('title', '')

@section('content')
<div class="">
	<div class="">
		<h1>Panneau d'administration</h1>
		<div class="">
			<div class="">
				<div class="">
					<h2>Tratamientos de la pagina de inicio</h2>
					<div>
						<a href="{{route('home')}}" class="">
							
              <button type="submit" class="button_text">{{ __('Añadir un tratamiento') }}</button> 
						</a>
						<a href="{{route('home')}}" class="">
							
              <button type="submit" class="button_text">{{ __('Suprimir un tratamiento') }}</button> 
						</a>
					</div>
				</div>
				<div class="">
					<h2>Citas</h2>
					<div>
						<a href="{{route('home')}}" class="">
							
              <button type="submit" class="button_text">{{ __('Modificar la citas disponibles') }}</button> 
						</a>
						<a href="{{route('home')}}" class="">
							
              <button type="submit" class="button_text">{{ __('Modificar la citas disponibles') }}</button> 
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection