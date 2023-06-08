@extends('layouts.sign-structure')

@section('title') Edit profile @endsection

@section('content')
	
	<div class="sign_container">
		<div class="sign_text_block">
			<h1>EDIT PROFILE</h1>
		</div>
		
		@include('inc.messages')

		<form action="{{ route('edit_form', $data->id) }}" method="POST" enctype="multipart/form-data" class="sign_form">
		@csrf

			<label for="surname" class="input_label"><p class="input_title">Surname</p>
				<input type="text" name="surname" value="{{ $data->surname }}" id="surname" class="sign_input">
			</label>

			<label for="name" class="input_label"><p class="input_title">Name</p>
				<input type="text" name="name" value="{{ $data->name }}" id="name" class="sign_input">
			</label>

			<label for="l_name" class="input_label"><p class="input_title">L-name</p>
				<input type="text" name="l_name" value="{{ $data->l_name }}" id="l_name" class="sign_input">
			</label>

			<label for="email" class="input_label"><p class="input_title">Email</p>
				<input type="text" name="email" value="{{ $data->email }}" id="email" class="sign_input">
			</label>

			<label for="password" class="input_label"><p class="input_title">Password</p>
				<input type="password" name="password" value="{{ $data->password }}" id="password" class="sign_input">
			</label>
			
			<label for="avatar" class="input_label"><p class="input_title">Avatar</p>
				<input type="file" name="avatar" id="avatar" class="sign_input_file">
			</label>
			
			<input type="submit" name="reg-sub" class="sign_btn" value="EDIT">
		</form>
	</div>

@endsection