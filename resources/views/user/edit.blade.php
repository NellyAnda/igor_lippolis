@extends('layouts.app')

@section('pageTitle', 'Modificar a su cuenta')

@section('image_header')
<div class="connection_background_picture">
  <h1>Modificar a su cuenta</h1>
</div>
@endsection

@section('content')

<h2>Su cuenta</h2>
@if(session()->has('message-delete'))
<div class="align">
  {{ session()->get('message-delete') }}
</div>
@endif
@if(session()->has('message-confirmation'))
<div class="align">
  {{ session()->get('message-confirmation') }}
</div> 
@endif
@if(session()->has('message'))
<div class="align">
  {{ session()->get('message') }}
</div>
@endif
<div class="user_info_containers">
  <form method="POST" action="{{route('User.update', ['User' => $user->id])}}"  class="form_container">
    @csrf
    @method('PUT')
    <div class="label_input_container">
      <label for="name" class="">{{ __('Apellidos') }}</label>
      <input id="name" type="text" @error('name') is-invalid @enderror name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="label_input_container">
      <label for="first_name" class="">{{ __('Nombre') }}</label>
      <input id="first_name" type="text" @error('first_name') is-invalid @enderror name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>
      @error('first_name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>	
    <div class="label_input_container">
      <label for="address" class="">{{ __('Dirección completa') }}</label>
      <input id="address" type="text" @error('address') is-invalid @enderror name="address" value="{{ $user->address }}" required autocomplete="address" autofocus>
      @error('address')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>	
    <div class="label_input_container">
      <label for="phone_number" class="">{{ __('Número de teléfono') }}</label>
      
      <input id="phone_number" type="tel" @error('phone_number') is-invalid @enderror name="phone_number" value="{{ $user->phone_number }}" required autocomplete="phone_number" autofocus>
      @error('phone_number')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>	
    <div class="label_input_container">
      <label for="email" class="">{{ __('Correo electronico') }}</label>
      <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ $user->email }}" required autocomplete="email">
      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="label_input_container bottom_spacing">
      <label for="password" class="">{{ __('Contraseña actual') }}</label>
      <input id="password" type="password" @error('password') is-invalid @enderror name="current-password" required autocomplete="new-password">
    </div>
  </div>   
  <div>
    <h3 class="top_spacing bottom_spacing change_password_title">Cambiar a mi contraseña</h3>
  </div>
  <div class="user_info_containers">    
    <div class="form_container">
      <div class="label_input_container">
        <label for="password" class="">{{ __('Nueva contraseña') }}</label>
        <input id="password" type="password" @error('password') is-invalid @enderror name="new-password" autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="label_input_container bottom_spacing">
        <label for="password-confirm" class="">{{ __('Repetir nueva contraseña') }}</label>
        <input id="password-confirm" type="password" name="new-password-confirmation" autocomplete="new-password">
      </div>
    </div>
    <div class="top_spacing bottom_spacing align">
      <button type="submit" class="button_text">
        {{ __('Engravar') }}
      </button>
    </div>
  </form>
  <form method="POST" action="{{ route('User.destroy', ['User' => $user->id]) }}" style="display: contents">
    @csrf
    @method('DELETE')
    <p>para borrar tu cuenta</p>
    <div class="label_input_container bottom_spacing">
      <label for="password" class="">{{ __('Contraseña actual') }}</label>
      <input id="password" type="password" @error('password') is-invalid @enderror name="current-password" required autocomplete="new-password">
    </div>
    <div class="bottom_spacing align">
      <button type="submit" class="button_text">{{ __('Borrar su cuenta') }}</button>
    </div>
  </form>
</div>
@endsection