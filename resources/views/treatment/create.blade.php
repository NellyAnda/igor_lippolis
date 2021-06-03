@extends('layouts.app')

@section('pageTitle', 'Añadir un tratamiento')

@section('image_header')
<div class="admin_background_picture">
	<h1>Añadir un tratamiento</h1>
</div>
@endsection


@section('content')
<h2>Añadir un tratamiento</h2>
<p class="add_treatments_containers top_spacing bottom_spacing">Para que funcione, hay que rellenar todos los campos y elegir las opciones adecuadas.</p>
<div class="add_treatments_containers bottom_spacing">
<form method="POST" enctype="multipart/form-data" action="{{ route('Treatment.store') }}" class="form_container">
@csrf
<div class="label_input_container">
  <label for="treatment_path">Elige un tratamiento</label>
    <select name="treatment_path" id="treatment_path" class="select">
      <option value="">Elige a una opción</option>
      <option value="cosmetic_acupuncture">Acupuntura cosmetica</option>
      <option value="smoking">Tabaquismo</option>
      <option value="diet">Adelgazar</option>
      <option value="pms">Sindrome premenstrual</option>
      <option value="migraine">Cefalea</option>
      <option value="lumbago">Lumbalgia</option>
      <option value="insomnia">Insomnio</option>
      <option value="immune_system">Defensas imunitarias</option>
      <option value="anxiety">Tratamiento de la ansiedad</option>
    </select>
  </div>
  <div class="label_input_container">
    <label for="treatment_name" class="">{{ __('Titulo que va a parecer en la pagina Inicio') }}</label>
    <input id="treatment_name" type="text" @error('name') is-invalid @enderror name="treatment_name" value="{{ old('treatment_name') }}" required autocomplete="treatment_name" autofocus>
    @error('treatment_name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
    <div class="label_input_container">
      <label for="picture">Imagen del tratamiento</label>
      <input type="file" name="picture" id="picture" class="file_input">
    </div>
    <div class="label_input_container">
      <label for="treatment_picture_description">Texto alternativo del imagen</label>
      <input type="text" name="treatment_picture_description" id="treatment_picture_description">
    </div>
  </div>
  <div class="align top_spacing">
  <input class="brown_button_text" type="submit" value="Añadir el tratamiento">
</div>


  </form>
  <div class="align top_spacing bottom_spacing">
    <a href="{{route('Treatment.index')}}" class="bottom_spacing">
      <button type="submit" class="brown_button_text">{{ __('Lista de los tratamiento') }}</button> 
    </a>
  </div>
  @endsection