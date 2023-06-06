@extends('layouts.structure')

@section('title') Profile @endsection


@section('content')

	<div class="profile_info_block">
		<div class="profile_info_img">
			<img src="{{ asset('imgs/profile/3sohhcx7rrw91.jpg') }}" alt="">
		</div>
		<div class="profile_info_text">
			<p><strong>Surname:</strong> user</p>
			<p><strong>Name:</strong> user</p>
			<p><strong>L-Name:</strong> user</p>
			<p><strong>Email:</strong> user@mail.ru</p>
			
			<div class="sign_btn_block">
				<a href="#" class="sign_btn_auth">EDIT</a>
				<a href="#" class="sign_btn_auth">MY COMMENTS</a>
			</div>
		</div>
	</div>

	<div class="profile_comment_block">
		<h1 class="profile_comment_block_title">COMMENTS</h1>

		<form action="" method="POST" class="profile_comment_add">
			<label for=""><p>Title:</p>
				<input type="text">
			</label>

			<label for=""><p>Text:</p>
				<textarea name="" id=""></textarea>
			</label>

			<input type="submit" value="ADD">
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
					<h4>Answer - User User</h4>
				</div>
				<div class="profile_comment_text">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti mollitia ratione, accusamus sit fuga odio? Eius amet voluptatem quam magni. Porro sed culpa similique explicabo! Quis perferendis a dolor excepturi vel? Harum rerum tempora ipsa magnam nesciunt earum saepe autem, aspernatur sint incidunt, quasi, consectetur totam ab fugit natus. Animi quos illum repellat, quaerat velit alias mollitia quis odio molestiae a quisquam officia itaque ipsa accusamus! Consectetur ipsa, fugit in molestias expedita dignissimos fuga alias omnis tempore quisquam sequi ullam facilis, nostrum dolore. Reiciendis reprehenderit quisquam fugiat minima molestias repudiandae tenetur magni id, nulla illum fuga aspernatur temporibus, iusto vero.</p>
				</div>
			</div>

		</div>
	</div>

@endsection