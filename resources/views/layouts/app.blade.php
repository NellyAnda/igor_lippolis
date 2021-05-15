<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('pageTitle')</title> 
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- Scripts -->
	
	<script src="https://kit.fontawesome.com/f3115f342a.js" crossorigin="anonymous"></script>
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	
	<!-- Styles -->
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
	
</head>
<body>
	<header>
		<div class="top_banner">
			<div class="social_networks">
				<a href="https://www.facebook.com/pages/category/Therapist/Igor-Lippolis-109216020577172/" target="_blank"><img src="{{asset('images/facebook.svg')}}" class="social_network" alt="icono de Facebook"></a>
				<a href="https://www.instagram.com/igor.chinesemedicine/" target="_blank"><img src="{{asset('images/instagram.svg')}}" class="social_network" alt="icono de Instagram"></a>
				<a href="tel:+34632387065"><img src="{{asset('images/phone.svg')}}" class="social_network" alt="icono de telefono"><span class="phone">632 387 065</span></a>
			</div>
			<div class="top_navbar_links">
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				<a href="{{ route('home') }}">Pedir cita</a>
				@guest
				@if (Route::has('register'))
				<li><a href="{{ route('register') }}"> {{ __('Registrarse') }} </a></li>
				@endif
				<ul>
					<li><a href="{{ route('login') }}"> {{ __('Conectarse') }} </a>
						@else
						<ul class="top_navbar">
							@if (Auth::user()->administrator === 1)
							<li><a href="{{route('admin')}}" class="topMenuLink">Pagina administrativa</a></li>
							@endif
							<li><a href=" {{ route('User.show', ['User' => Auth::user()->id]) }} " class="topMenuLink">Mi cuenta</a></li>
							<li><a href=" {{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="topMenuLink"> {{ __('Desconectarse') }} </a></li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="topMenuLink">
								@csrf
							</form>
						</ul>
						<i class="fas fa-caret-down dropdown"></i>
					</li>
				</ul>
				@endguest
				
				
				
			</div>
		</div>
		<div>
			@yield('image_header')
		</div>
		<div class="mobile_navbar">
			<button class="ham nav_button"></button>
			<nav class="navbar">
				<ul>
					<li><a class="menuLink" href="{{ route('home') }}">Inicio</a></li>
					<li><a class="menuLink" href="{{ route('basic_theories') }}">Teorias Basicas</a></li>
					<li><a class="menuLink" href="{{ route('acupuncture') }}">Acupuntura</a></li>
					<li><a class="menuLink" href="{{ route('therapeutic_techniques') }}">Tecnicas Terapeuticas</a></li>
					<li><a class="menuLink" href="{{ route('treatments') }}">Tratamientos</a></li>
					<li><a class="menuLink" href="{{ route('home') }}">Pedir cita</a></li>
				</ul>
			</nav>
		</div>
		<script type="text/javascript" src="{{ asset('js/navbar.js') }}" ></script>
	</header>
	
	
	
	<main>
		<div class="desktop_navbar">
			<nav class="desktop_nav">
				<ul>
					<li><a class="" href="{{ route('home') }}">Inicio</a></li>
					<li><a class="" href="{{ route('basic_theories') }}">Teorias Basicas</a></li>
					<li><a class="" href="{{ route('acupuncture') }}">Acupuntura</a></li>
					<li><a class="" href="{{ route('therapeutic_techniques') }}">Tecnicas Terapeuticas</a></li>
					<li><a class="" href="{{ route('treatments') }}">Tratamientos</a></li>
					<li><a class="" href="{{ route('home') }}">Pedir cita</a></li>
				</ul>
			</nav>
		</div>	
		@yield('content')
	</main>
	<footer class="footer_background_picture">


		<div class="footer_main_container">

		<div class="top_spacing">
			{{-- social network --}}
			
			<a href="https://www.facebook.com/pages/category/Therapist/Igor-Lippolis-109216020577172/" target="_blank"><img src="{{asset('images/facebook.svg')}}" class="footer_social_network" alt="icono de Facebook"></a>
			<a href="https://www.instagram.com/igor.chinesemedicine/" target="_blank"><img src="{{asset('images/instagram.svg')}}" class="footer_social_network" alt="icono de Instagram"></a>
			<a href="tel:+34632387065"><img src="{{asset('images/phone.svg')}}" class="footer_social_network" alt="icono de telefono"><span class="phone">632 387 065</span></a>
		</div>
		
		<div class="footer_text_container">
			
			<div class="top_spacing">
				{{-- direccion --}}
				<h4>Direcciones :</h4>
				<div>
					<div class="top_spacing">
						<a href="https://www.google.com/maps/place/Carrer+de+Maria+Ant%C3%B2nia,+08196,+Barcelona,+Spain/@41.433214,2.084091,16.75z/data=!4m5!3m4!1s0x12a497686b7a0819:0x9cef2d0348f82a96!8m2!3d41.4334187!4d2.0868481" target="_blank" class="footer_link footer_address_link"><p>Las planas<br>Calle Maria Antonia<br>08196 Sant cugat</p></a>
					</div>
					<div class="top_spacing">
						<a href="https://www.google.com/maps/place/Carrer+de+Proven%C3%A7a,+292,+3,+08008+Barcelona,+Spain/@41.3943214,2.1597714,18z/data=!4m5!3m4!1s0x12a4a293b9386e99:0xc506ffb755143d79!8m2!3d41.39433!4d2.161328" target="_blank" class="footer_link footer_address_link"><p>Calle Provenza 292, 6-3<br>08008 Barcelona<br>Metro: Diagonal (L3 - L5)<br>Ferrocarril : Provença</p></a>
					</div>
					<div class="top_spacing bottom_spacing dark_emphasis">
						<p>Tratamientos a domicilio</p>
					</div>
				</div>
			</div>


			<div class="top_spacing bottom_spacing">
				{{-- horarios --}}
				<h4>Horarios de atención :</h4>
				<div>
					<p class="top_spacing"><span class="dark_emphasis">De lunes a sábado :</span><br>De las 9 a las 20</p>
					<p class="top_spacing"><span class="dark_emphasis">Los domingos :</span><br>Cerrado (se puede solicitar cita con<br> antelación o por emergencias)</p>
				</div>
			</div>
			<div class="top_spacing footer_links">
				{{-- legal mentions --}}
				<a href="" class="footer_link">Aviso legal</a>
				<a href="" class="footer_link">Política de privacidad</a>
				<a href="" class="footer_link">Política de cookies</a>
			</div>
			
		</div>
		
		<div class="top_spacing">
			{{-- copyright --}}
			<p>© Copyright Igor Lippolis</p>
		</div>
</div>


	</footer>
</body>
</html>
