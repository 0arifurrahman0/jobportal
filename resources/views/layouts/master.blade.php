<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

	<head>

		@include('layouts.head')  

	</head>

	<body>

	<!-- <div id="preloader"></div> -->

		{{-- Navigation --}}
		@include ('layouts.nav')

	<header id="header">
		<div class="container">

			@yield('head')

		</div>	
	</header>

	<section>
		<div class="container">

			<div class="row">

				@yield('content')

			</div>

		</div>		
	</section>

	@include('layouts.footer')

	</body>
</html>
