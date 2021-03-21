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
	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
	
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	<!-- Styles -->
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
	
</head>
<body>
	<header>
		<div class="top_banner">
			<a href="https://www.facebook.com/pages/category/Therapist/Igor-Lippolis-109216020577172/" target="_blank"><img src="{{asset('images/facebook.svg')}}" class="social_network" alt="icono de Facebook"></a>
			<a href="https://www.instagram.com/igor.chinesemedicine/" target="_blank"><img src="{{asset('images/instagram.svg')}}" class="social_network" alt="icono de Instagram"></a>
			<a href="tel:+34632387065"><img src="{{asset('images/phone.svg')}}" class="social_network" alt="icono de telefono">632 387 065</a>
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif
				<a class="menuLink" href="{{ route('home') }}">Pedir cita</a>
			@guest
				@if (Route::has('register'))
				<a href="{{ route('register') }}"> {{ __('S\'enregistrer') }} </a>
				@endif
				<a href="{{ route('login') }}"> {{ __('Connexion') }} </a>
			@else
				<div>
					@if (Auth::user()->administrator === 1)
						<a href="{{route('admin')}}">Pagina administrativa</a>
					@endif
						<a href=" {{ route('User.show', ['User' => Auth::user()->id]) }} ">Mi cuenta</a>
						<a href=" {{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Desconectarse') }} </a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
						</form>
				</div>
			@endguest
		</div>
		<div>
			@yield('image_header')
		</div>
		<button class="ham"></button>
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
		<script type="text/javascript" src="{{ asset('js/navbar.js') }}" ></script>
	</header>
	<main>
		@yield('content')
	</main>
</body>
</html>
