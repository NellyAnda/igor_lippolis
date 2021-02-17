<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
	<div id="app">
		<div class="card-body">
			@if (session('status'))
					<div class="alert alert-success" role="alert">
							{{ session('status') }}
					</div>
			@endif
		
			<form action={{ route('logout') }} method="POST">
				@csrf
				<button type="submit" class="button_text">
					{{ __('LOGOUT') }}
				</button>
		
			</form>

			{{-- {{ __('Usted está conectado!') }} --}}
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
