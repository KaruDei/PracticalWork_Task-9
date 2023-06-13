@extends('layouts.structure')

@section('title') Library @endsection


@section('content')

	@if (Auth::check())
		<p>id: {{Auth::user() -> id}} <br> email:{{Auth::user() -> email}}<br> password:{{Auth::user() -> email}} <br></p>
	@endif

	<div class="book_items">
		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/2524023.jpg') }}" alt="">
		</a>
		
		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/2559539_detail.jpg') }}" alt="">
		</a>
		
		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/32127989_sluk.jpg') }}" alt="">
		</a>
		
		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/Снимок экрана 2023-06-06 151608.jpg') }}" alt="">
		</a>

		
		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/Снимок экрана 2023-06-06 151608.jpg') }}" alt="">
		</a>

		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/32127989_sluk.jpg') }}" alt="">
		</a>
		
		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/2559539_detail.jpg') }}" alt="">
		</a>

		<a href="{{route('book_page')}}" class="book_item">
			<img src="{{ asset('imgs/library/2524023.jpg') }}" alt="">
		</a>
		
	</div>

@endsection