@extends('layouts.structure')

@section('title') My comments @endsection


@section('content')

<div class="profile_comment_items">

	@if ($comments <> '[]')
		@foreach ($comments as $comment)
		@foreach ($users as $user)
			@if ($user->id == $comment->user_id)
				<div class="profile_comment_item">
					<h2 class="profile_comment_title">{{$comment->title}}</h2>
					<div class="profile_comment_user_info">
						<h4>{{$user->surname}} {{$user->name}} {{$user->l_name}}</h4>
						
					</div>
					<div class="profile_comment_text">
						<p>{{$comment->text}}</p>
					</div>
				</div>
			@endif
		@endforeach
		@endforeach

	@endif

</div>

@endsection