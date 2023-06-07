@extends('layouts.structure')

@section('title') People @endsection

@section('content')

	<div class="people_items">

		@foreach ($data as $item)

			<a href="{{ route('people-profile') }}" class="people_item">
				<div class="people_avatar">
					
					@if ($item->avatar === NULL)
						<img src="{{ asset('imgs/profile/3sohhcx7rrw91.jpg') }}" alt=""> 
					@else
						<img src="{{ asset('imgs/profile/sandro-g-photography-kvgMrAcTJIw-unsplash.jpg') }}" alt=""> 
					@endif

				</div>
				<div class="people_info">
					<h2> {{ $item->surname }} {{ $item->name }} {{ $item->l_name }} </h2>
					<p> {{ $item->email }} </p>
				</div>
			</a>
			
		@endforeach


		{{-- <a href="{{route('people-profile')}}" class="people_item">
			<div class="people_avatar">
				<img src="{{ asset('imgs/profile/3sohhcx7rrw91.jpg') }}" alt="">
			</div>
			<div class="people_info">
				<h2>User User User</h2>
				<p>User@mail.ru</p>
			</div>
		</a>

		<a href="{{route('people-profile')}}" class="people_item">
			<div class="people_avatar">
				<img src="{{ asset('imgs/profile/sandro-g-photography-kvgMrAcTJIw-unsplash.jpg') }}" alt="">
			</div>
			<div class="people_info">
				<h2>User User User</h2>
				<p>User@mail.ru</p>
			</div>
		</a> --}}

	</div>

@endsection