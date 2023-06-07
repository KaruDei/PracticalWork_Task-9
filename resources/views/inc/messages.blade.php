@if ($errors -> any())
	<div class="error-block">
		<h4>WARNING!</h4>
		<ul>
			@foreach ($errors -> all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if (session('success'))
	<div class="mess-block">
		<h4>SUCCESS!</h4>
		{{ session('success') }}
	</div>
@endif