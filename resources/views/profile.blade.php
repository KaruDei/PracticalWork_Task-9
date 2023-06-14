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
			@if (Auth::check())
				@if (Auth::user()->id == $data->id)
					<div class="sign_btn_block">
						<a href="{{route('edit_profile', $data->id)}}" class="sign_btn_auth">EDIT</a>
						<a href="{{route('my_comments', ['id' => $data->id])}}" class="sign_btn_auth">MY COMMENTS</a>
						<a href="{{route('delete_user', $data->id)}}" class="sign_btn_auth">DELETE</a>
					</div>
				@endif
			@endif
		</div>
	</div>
	
	<div class="profile_comment_block">
		<h1 class="profile_comment_block_title">COMMENTS</h1>

		<form action="{{ route('add_comment', $data->id) }}" method="POST" class="profile_comment_add">
		@csrf

			<input type="hidden" name="profile_id" value="{{ $data->id }}">
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

			<label for="comment_title"><p>Title:</p>
				<input type="text" name="comment_title" id="comment_title" class="profile_comment_add_title">
			</label>

			<label for="comment_text"><p>Text:</p>
				<textarea name="comment_text" id="comment_text" class="profile_comment_add_text"></textarea>
			</label>

			<input type="submit" name="comment_sub" value="ADD" class="profile_comment_add_btn">
		</form>

		<div class="profile_comment_items">

			@if ($comments <> '[]')
				@foreach ($comments as $comment)
				@foreach ($users as $user)
					@if ($user->id == $comment->user_id)
						<div class="profile_comment_item">
							<h2 class="profile_comment_title">{{$comment->title}}</h2>
							<div class="profile_comment_user_info">
								<h4>{{$user->surname}} {{$user->name}} {{$user->l_name}}</h4>
								@if (Auth::check())
									@if (Auth::user()->id == $user->id)
										<a href="{{ route('delete_comment', ['id' => $data->id , 'del' => $comment->id]) }}" class="underline">Delete</a>
									@endif
								@endif
							</div>
							<div class="profile_comment_text">
								<p>{{$comment->text}}</p>
							</div>
						</div>
					@endif
				@endforeach
				@endforeach

				<a href="#" class="profile_comment_add_btn" style="text-align: center">ALL</a>

			@endif

		</div>
	</div>

@endsection