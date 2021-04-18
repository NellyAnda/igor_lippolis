@extends('layouts.app')

@section('pageTitle', 'Panel de administrador')
{{-- 
@section('image_header')
<div class="admin_background_picture">
	<h1>Panel de administrador</h1>
</div>
@endsection --}}


@section('content')
<div class="">
	<div class="">
		<h1>Panel de administrador</h1>
		<div class="">
			<div class="">
			
			
				<div class="">
					<h2>Tratamientos de la pagina de inicio</h2>
					<div>

						
						<a href="{{route('Treatment.create')}}" class="">
              <button type="submit" class="button_text">{{ __('Añadir un tratamiento') }}</button> 
						</a>
						<a href="{{route('Treatment.index')}}" class="">
              <button type="submit" class="button_text">{{ __('Modificar un tratamiento') }}</button> 
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