@extends('layouts.sign-structure')

@section('title') Registration @endsection

@section('content')
	
	<div class="sign_container">
		<div class="sign_text_block">
			<h1>REGISTRATION</h1>
		</div>
		
		<form action="" method="POST" enctype="multipart/form-data" class="sign_form">

			<label for="" class="input_label"><p class="input_title">Surname <span class="required">*</span></p>
				<input type="text" class="sign_input">
			</label>

			<label for="" class="input_label"><p class="input_title">Name <span class="required">*</span></p>
				<input type="text" class="sign_input">
			</label>

			<label for="" class="input_label"><p class="input_title">L-name</p>
				<input type="text" class="sign_input">
			</label>

			<label for="" class="input_label"><p class="input_title">Email <span class="required">*</span></p>
				<input type="text" class="sign_input">
			</label>

			<label for="" class="input_label"><p class="input_title">Password <span class="required">*</span></p>
				<input type="password" class="sign_input">
			</label>
			
			<label for="" class="input_label"><p class="input_title">Avatar</p>
				<input type="file" class="sign_input_file">
			</label>
			
			<input type="submit" class="sign_btn" value="REGISTER">
		</form>
	</div>

@endsection