@extends('layouts.structure')

@section('title') Welcome @endsection


@section('content')

	<div class="welcome_block">
		<h1 class="sign_text_block">WELCOME TO THE LIBRARY!</h1>
		@if (Auth::check())

		@else 
			<div class="sign_btn_block">
				<a href="/auth" class="sign_btn_auth ">LOGIN</a>
				<a href="/reg" class="sign_btn_reg">REGISTRATION</a>
			</div>
		@endif
	</div>

@endsection