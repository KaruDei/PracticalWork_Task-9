@extends('layouts.sign-structure')

@section('title') Registration @endsection

@section('content')
	
	<div class="sign_container">
		<div class="sign_text_block">
			<h1>REGISTRATION</h1>
		</div>
		
		@include('inc.messages')

		<form action="{{ route('reg-form') }}" method="POST" enctype="multipart/form-data" class="sign_form">
		@csrf

			<label for="surname" class="input_label"><p class="input_title">Surname <span class="required">*</span></p>
				<input type="text" name="surname" id="surname" class="sign_input">
			</label>

			<label for="name" class="input_label"><p class="input_title">Name <span class="required">*</span></p>
				<input type="text" name="name" id="name" class="sign_input">
			</label>

			<label for="l_name" class="input_label"><p class="input_title">L-name</p>
				<input type="text" name="l_name" id="l_name" class="sign_input">
			</label>

			<label for="email" class="input_label"><p class="input_title">Email <span class="required">*</span></p>
				<input type="text" name="email" id="email" class="sign_input">
			</label>

			<label for="password" class="input_label"><p class="input_title">Password <span class="required">*</span></p>
				<input type="password" name="password" id="password" class="sign_input">
			</label>
			
			<label for="avatar" class="input_label"><p class="input_title">Avatar</p>
				<input type="file" name="avatar" id="avatar" class="sign_input_file">
			</label>
			
			<input type="submit" name="reg-sub" class="sign_btn" value="REGISTER">
		</form>
	</div>

@endsection