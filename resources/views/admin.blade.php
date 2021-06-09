@extends('layouts.app')

@section('pageTitle', 'Panel de administrador')

@section('image_header')
<div class="admin_background_picture">
	<h1>Panel de administrador</h1>
</div>
@endsection

@section('content')
<div class="admin_page_main_container">
	<h2>Panel de administrador</h2>
	<div class="align">
		{{ session()->get('message-treatment-deleted') }}
	</div> 
</div> 
		<h3 class="top_spacing bottom_spacing admin_page">Tratamientos de la pagina de inicio</h3>
		<div class="admin_page_buttons_containers">
			<a href="{{route('Treatment.create')}}" class="bottom_spacing">
				<button type="submit" class="brown_button_text">{{ __('Añadir un tratamiento') }}</button> 
			</a>
			<a href="{{route('Treatment.index')}}">
				<button type="submit" class="brown_button_text">{{ __('Lista de los tratamientos') }}</button> 
			</a>
		</div>
		<h3 class="admin_page top_spacing bottom_spacing">Citas</h3>
		<div class="admin_page_buttons_containers">
			<a href="{{route('home')}}" class="bottom_spacing">
				<button type="submit" class="brown_button_text">{{ __('Modificar la citas disponibles') }}</button> 
			</a>
			<a href="{{route('home')}}" class="bottom_spacing">
				<button type="submit" class="brown_button_text">{{ __('Modificar la citas disponibles') }}</button> 
			</a>
		</div>
</div>
@endsection