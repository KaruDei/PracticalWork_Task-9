@extends('layouts.sign-structure')

@section('title') Authorization @endsection

@section('content')
	
	<div class="sign_container">
		<div class="sign_text_block">
			<h1>AUTHIRIZATION</h1>
		</div>

		<form action="" method="POST" class="sign_form">
			
			<label for="" class="input_label"><p class="input_title">Email</p>
				<input type="text" class="sign_input">
			</label>

			<label for="" class="input_label"><p class="input_title">Password</p> 
				<input type="password" class="sign_input">
			</label>

			<input type="submit" class="sign_btn" value="LOGIN">
		</form>
	</div>

@endsection