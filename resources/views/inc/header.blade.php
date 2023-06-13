<header class="header">
	<div class="container">
		<div class="header_flex">
			<div class="Logo">
				<h1><a href="{{route('home')}}">LIBRARY</a></h1>
			</div>

			<nav class="menu">
				<a href="{{route('home')}}">Home</a>
				<a href="{{route('library')}}">Books</a>
				<a href="{{route('people')}}">People</a>
				@if (Auth::user())
					<a href="{{route('profile', Auth::user() -> id)}}">Profile</a>
					<a href="{{route('logout')}}">Exit</a>
				@else
					<a href="{{route('auth')}}">Sing In</a>
					<a href="{{route('reg')}}">Sing Up</a>
				@endif
				
				
			</nav>
		</div>
	</div>
</header>