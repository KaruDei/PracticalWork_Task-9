@extends('layouts.structure')

@section('title') Profile @endsection


@section('content')

	<div class="profile_info_block">
		<div class="profile_info_img">
			@if ($data->avatar === NULL)
				<img src="{{ asset('imgs/profile/3sohhcx7rrw91.jpg') }}" alt="">
			@else
				<img src="{{ asset('imgs/profile/'.$data->avatar) }}" alt="">
			@endif
		</div>
		<div class="profile_info_text">
			<p><strong>Surname:</strong> {{ $data->surname }} </p>
			<p><strong>Name:</strong> {{ $data->name }} </p>
			<p><strong>L-Name:</strong> {{ $data->l_name }} </p>
			<p><strong>Email:</strong> {{ $data->email }} </p>
			
			<div class="sign_btn_block">
				<a href="{{route('edit_profile', $data->id)}}" class="sign_btn_auth">EDIT</a>
				<a href="{{route('my_comments')}}" class="sign_btn_auth">MY COMMENTS</a>
				<a href="{{route('delete_user', $data->id)}}" class="sign_btn_auth">DELETE</a>
			</div>
		</div>
	</div>
	
	<div class="profile_comment_block">
		<h1 class="profile_comment_block_title">COMMENTS</h1>

		<form action="{{ route('add_comment', $data->id) }}" method="POST" class="profile_comment_add">
		@csrf

			<label for="comment_title"><p>Title:</p>
				<input type="text" name="comment_title" id="comment_title" class="profile_comment_add_title">
			</label>

			<label for="comment_text"><p>Text:</p>
				<textarea name="comment_text" id="comment_text" class="profile_comment_add_text"></textarea>
			</label>

			<input type="submit" name="comment_sub" value="ADD" class="profile_comment_add_btn">
		</form>

		<div class="profile_comment_items">

			<div class="profile_comment_item">
				<h2 class="profile_comment_title">Comment title</h2>
				<div class="profile_comment_user_info">
					<h4>User User</h4>
				</div>
				<div class="profile_comment_text">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti mollitia ratione, accusamus sit fuga odio? Eius amet voluptatem quam magni. Porro sed culpa similique explicabo! Quis perferendis a dolor excepturi vel? Harum rerum tempora ipsa magnam nesciunt earum saepe autem, aspernatur sint incidunt, quasi, consectetur totam ab fugit natus. Animi quos illum repellat, quaerat velit alias mollitia quis odio molestiae a quisquam officia itaque ipsa accusamus! Consectetur ipsa, fugit in molestias expedita dignissimos fuga alias omnis tempore quisquam sequi ullam facilis, nostrum dolore. Reiciendis reprehenderit quisquam fugiat minima molestias repudiandae tenetur magni id, nulla illum fuga aspernatur temporibus, iusto vero.</p>
				</div>
			</div>

			<div class="profile_comment_item">
				<h2 class="profile_comment_title">Comment title</h2>
				<div class="profile_comment_user_info">
					<h4>User User</h4>
					<a href="" class="underline">Delete</a>
				</div>
				<h4>Answer - User User</h4>
				<div class="profile_comment_text">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti mollitia ratione, accusamus sit fuga odio? Eius amet voluptatem quam magni. Porro sed culpa similique explicabo! Quis perferendis a dolor excepturi vel? Harum rerum tempora ipsa magnam nesciunt earum saepe autem, aspernatur sint incidunt, quasi, consectetur totam ab fugit natus. Animi quos illum repellat, quaerat velit alias mollitia quis odio molestiae a quisquam officia itaque ipsa accusamus! Consectetur ipsa, fugit in molestias expedita dignissimos fuga alias omnis tempore quisquam sequi ullam facilis, nostrum dolore. Reiciendis reprehenderit quisquam fugiat minima molestias repudiandae tenetur magni id, nulla illum fuga aspernatur temporibus, iusto vero.</p>
				</div>
			</div>

		</div>
	</div>

@endsection