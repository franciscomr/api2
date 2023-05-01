<!DOCTYPE html>
<html lang="es">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		@routes
		@vite('resources/css/app.css')
		<title>@yield('title', 'Sagaji')</title>
</head>

<body>
		<div class="antialiased">
				<div id="app">
						@yield('content')
				</div>
				@vite('resources/js/app.js')
		</div>
</body>

</html>
