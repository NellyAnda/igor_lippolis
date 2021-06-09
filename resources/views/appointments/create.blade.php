@extends('layouts.app')

@section('pageTitle', 'Pedir una cita')

{{-- @section('image_header')
<div class="admin_background_picture">
	<h1>Pedir una cita</h1>
</div>
@endsection --}}


@section('content')

<form method='POST' action="{{ route('Appointments.store') }}" class="form_container">
  @csrf
<div>
  <div>
    <h2 class="top_spacing">Pedir una cita</h2>

 
	<h2 id="today"> Hoy somos el </h2>
	{{-- <section>
	<div id="app-calendar row justify-content-around">
		
<div class="grid-container col-lg-6 col-md-10 col-sm-8 mx-auto mb-4">
	<div class="grid-item">Lundi</div>
	<div class="grid-item">Mardi</div>
	<div class="grid-item">Mercredi</div>  
	<div class="grid-item">Jeudi</div>
	<div class="grid-item">Vendredi</div>
	<div class="grid-item">Samedi</div>  
	<div class="grid-item">Dimanche</div>
</div>
	</div>
	
</section> --}}
	
</div>

  <input type="button" value="9.00-10.00" name="time">
  <input type="button" value="10.00-11.00" name="time">
  <input type="button" value="11.00-12.00" name="time">
  <input type="button" value="12.00-13.00" name="time">
  <input type="button" value="13.00-14.00" name="time">
  <input type="button" value="14.00-15.00" name="time">
  <input type="button" value="15.00-16.00" name="time">
  <input type="button" value="16.00-17.00" name="time">
  <input type="button" value="17.00-18.00" name="time">
  <input type="button" value="18.00-19.00" name="time">
  <input type="button" value="19.00-20.00" name="time">





    <script type="text/javascript" src="{{ asset('js/appointments.js') }}" ></script>
  </div>
  <div>
    <h2>Elige el lugar de la cita</h2>

    <div class="label_input_container">
      <label for="place">Elige una ubicación por tu tratamiento</label>
      <select name="place" id="place" class="select">
        <option value="">Elige a una opción</option>
        <option value="treatment_home">Domicilio</option>
        <option value="treatment_lesplanes">Les Planes</option>
        <option value="treatment_diagonal">Diagonal</option>
      </select>
    </div>

  </div>
  
 
</div>
<div class="top_spacing bottom_spacing align">
  <button type="submit" class="button_text">
    {{ __('Enviar mi solicitud') }}
  </button>
</div>  
</form>
@endsection