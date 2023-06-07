@extends('layouts.sign-structure')

@section('title') Authorization @endsection

@section('content')
	
	<div class="sign_container">
		<div class="sign_text_block">
			<h1>AUTHIRIZATION</h1>
		</div>

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

		<form action="{{ route('auth-form') }}" method="POST" class="sign_form">
		@csrf

			<label for="email" class="input_label"><p class="input_title">Email</p>
				<input type="text" name="email" id="email" class="sign_input">
			</label>

			<label for="password" class="input_label"><p class="input_title">Password</p> 
				<input type="password" name="password" id="password" class="sign_input">
			</label>

			<input type="submit" name="auth-sub" class="sign_btn" value="LOGIN">
		</form>
	</div>

@endsection