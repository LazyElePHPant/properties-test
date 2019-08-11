@extends ('layouts.app')

@section ('content')
	<div class="card">
		<ul class="list-group">
			@foreach ($properties as $property)
				<li class="list-group-item">
					<a href="{{ route('properties.show', $property->id) }}">
						{{ $property->name }}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
@endsection
