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
							<li><a href=" {{ route('User.edit', ['User' => Auth::user()->id]) }} " class="topMenuLink">Mi cuenta</a></li>
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
</body>
</html>
