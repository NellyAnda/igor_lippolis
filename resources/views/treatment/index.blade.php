@extends('layouts.app')

@section('pageTitle', 'Trataminetos de la pagina de inicio')

@section('image_header')
<div class="admin_background_picture">
  <h1>Trataminetos de la pagina de inicio</h1>
</div>
@endsection


@section('content')
<div>
  <h2>Lista de los tratamientos de la pagina de inicio</h2>
  
  <div class="align">
    {{ session()->get('message-treatment-added') }}
  </div> 
  
  
  @foreach ($treatment as $treatment)
  
  
  <div>
    <div class="bottom_spacing">
      <p class="brown_emphasis">Tiulo del tratamiento :</p> 
      <p>{{$treatment->treatment_name}}</p>
    </div>
    
    <div class="bottom_spacing">
      <p class="brown_emphasis">Nombre del tratamiento :</p> 
      <p>{{$treatment->treatment_path}}</p>
    </div>
    
    <div class="bottom_spacing">
      <p class="brown_emphasis">Descripcion del imagen del tratamiento :</p> 
      <p>{{$treatment->treatment_picture_description}}</p>
    </div>
    
    
    <form method="POST" action="{{ route('Treatment.destroy', ['Treatment' => $treatment->id]) }}" style="display: contents">
      @csrf
      @method('DELETE')
      <div class="bottom_spacing">
        <button type="submit" class="button_text">{{ __('Borrar el tratamiento') }}</button>
      </div>
    </form>
  </div>    
  
  @endforeach
  
  
  <div class="admin_page_buttons_containers">
    <a href="{{route('Treatment.create')}}" class="bottom_spacing">
      <button type="submit" class="brown_button_text">{{ __('Añadir un tratamiento') }}</button> 
    </a>
    <a href="{{route('home')}}" class="bottom_spacing">
      <button type="submit" class="brown_button_text">{{ __('Volver a la pagina de inicio') }}</button> 
    </a>
  </div>
  
</div>
@endsection