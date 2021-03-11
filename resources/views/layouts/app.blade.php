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
	<script src="{{ asset('js/app.js') }}" defer></script>
	
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	<!-- Styles -->
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="top_banner">
			@if (session('status'))
					<div class="alert alert-success" role="alert">
							{{ session('status') }}
					</div>
			@endif
		
			<form action={{ route('logout') }} method="POST">
				@csrf
				{{-- <button type="submit" class="button_text">
					{{ __('LOGOUT') }}
				</button> --}}
		
			</form>

			{{-- {{ __('Usted está conectado!') }} --}}


			@guest
			<a class="menu nav-item nav-link" href="{{ route('login') }}">
				{{ __('Connexion') }}
			</a>
			@if (Route::has('register'))
			<a class="menu nav-item nav-link" href="{{ route('register') }}">
				{{ __('S\'enregistrer') }}
			</a>
			@endif
			{{-- @else
			
			<li class="nav-item dropdown">
				<img class="userAvatar" src="{{ asset(Auth::user()->avatar) }}" alt="user avatar">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->user_name }}
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					@if (Auth::user()->isAdmin)
					<a class="dropdown-item" href="{{route('admin')}}">Page d'admministration</a>
					@endif
					<a href=" {{ route('User.show', ['User' => Auth::user()->id]) }} " class="dropdown-item">
						Mon Compte
					</a>
					<a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
					
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</li>
			@endguest --}}



	</div>

	<div>
		@yield('image_header')
	</div>

		<nav>
		{{-- I WILL PUT MY NAV HERE --}}







		</nav>
	</header>

		<main>
			@yield('content')
		</main>
	</div>
</body>
</html>
