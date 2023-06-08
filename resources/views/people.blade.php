@extends('layouts.structure')

@section('title') People @endsection

@section('content')

	<div class="people_items">

		@foreach ($data as $item)

			<a href="{{ route('people_profile', $item->id) }}" class="people_item">
				<div class="people_avatar">
					
					{{-- @dd($item->avatar) --}}

					@if ($item->avatar === NULL)
						<img src="{{ asset('imgs/profile/3sohhcx7rrw91.jpg') }}" alt=""> 
					@else
						<img src="{{ asset('imgs/profile/'.$item->avatar) }}" alt=""> 
					@endif

				</div>
				<div class="people_info">
					<h2> {{ $item->surname }} {{ $item->name }} {{ $item->l_name }} </h2>
					<p> {{ $item->email }} </p>
				</div>
			</a>
			
		@endforeach

	</div>

@endsection