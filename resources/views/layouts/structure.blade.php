<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="wrapper">

		@include('inc.header')

		<main>
			<div class="container">
				@yield('content')
			</div>
		</main>

		@include('inc.footer')

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>