@extends ('layouts.app')

@section ('content')
	<div class="card p-3 col-8 col-offset-2">
		<h1>{{ $property->name }}</h1>

		<img src="{{ $property->photo }}">

		<h4 class="py-3">${{ number_format($property->price) }}</h4>
		<p>{{ $property->description }}</p>

		<p>{{ $property->address }}</p>
		<p>{{ $property->city }}, {{ $property->state }} {{ $property->zip }} {{ $property->country }}</p>
	</div>
@endsection
