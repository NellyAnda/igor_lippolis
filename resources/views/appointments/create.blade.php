@extends('layouts.app')

@section('pageTitle', 'Pedir una cita')

{{-- @section('image_header')
<div class="admin_background_picture">
	<h1>Pedir una cita</h1>
</div>
@endsection --}}


@section('content')

<form method='POST' action="{{ route('Appointments.store') }}" class="">
  @csrf
<div class="">
  <div>
    <h2 class="top_spacing">Pedir una cita</h2>

    <input type="hidden" name="user_id" value="{{Auth::user()->id }}">


<input type="date" value="" name="appointment_date">

	
</div>
<div class="radio">
  
  <input type="radio" value="09:00:00" name="appointment_time">
  <label for="">9.00-10.00</label>
  <input type="radio" value="10:00:00" name="appointment_time">
  <label for="">10.00-11.00</label>
  <input type="radio" value="11:00:00" name="appointment_time">
  <label for="">11.00-12.00</label>
  <input type="radio" value="12:00:00" name="appointment_time">
  <label for="">12.00-13.00</label>
  <input type="radio" value="13:00:00" name="appointment_time">
  <label for="">13.00-14.00</label>
  <input type="radio" value="14:00:00" name="appointment_time">
  <label for="">14.00-15.00</label>
  <input type="radio" value="15:00:00" name="appointment_time">
  <label for="">15.00-16.00</label>
  <input type="radio" value="16:00:00" name="appointment_time">
  <label for="">16.00-17.00</label>
  <input type="radio" value="17:00:00" name="appointment_time">
  <label for="">17.00-18.00</label>
  <input type="radio" value="18:00:00" name="appointment_time">
  <label for="">18.00-19.00</label>
  <input type="radio" value="19:00:00" name="appointment_time">
  <label for="">19.00-20.00</label>
</div>



    <script type="text/javascript" src="{{ asset('js/appointments.js') }}" ></script>
  
  <div>
    <h2>Elige el lugar de la cita</h2>

    <div >
     
      <input type="radio" value="customer_address" name="place">
      <label for="">Domicilio</label>
      <input type="radio" value="planes" name="place">
      <label for="">Les Planes</label>
      <input type="radio" value="diagonal" name="place">
      <label for="">Diagonal</label>
    </div>

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