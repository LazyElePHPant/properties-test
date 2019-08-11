@extends ('layouts.app')

@section ('content')
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul class="">
				@foreach ($errors->all() as $error)
					<li class="">{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif


	<form class="form" action="{{ route('properties.store') }}" method="POST">
		@csrf
		<div class="form-group">
		    <label for="name">Headline</label>
		    <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter name">
	  	</div>

	  	<div class="form-group">
		    <label for="price">Price</label>
		    <input type="text" class="form-control" value="{{ old('price') }}" name="price" placeholder="Enter price">
	  	</div>

	  	<div class="form-group">
		    <label for="description">Description</label>
		    <textarea class="form-control" name="description">{{ old('description') }}</textarea>
	  	</div>

	  	<div class="form-group">
		    <label for="address">Street Address</label>
		    <input type="text" class="form-control" value="{{ old('address') }}" name="address" placeholder="Enter street address">
	  	</div>

	  	<div class="form-group">
		    <label for="city">City</label>
		    <input type="text" class="form-control" value="{{ old('city') }}" name="city" placeholder="Enter city">
	  	</div>

	  	<div class="form-group">
		    <label for="state">State</label>
		    <input type="text" class="form-control" value="{{ old('state') }}" name="state" placeholder="Enter state">
	  	</div>

	  	<div class="form-group">
		    <label for="zip">Zipcode</label>
		    <input type="text" class="form-control" value="{{ old('zip') }}" name="zip" placeholder="Enter zipcode">
	  	</div>

	  	<div class="form-group">
		    <label for="country">Country</label>
		    <input type="text" class="form-control" value="{{ old('country') }}" name="country" placeholder="Enter country">
	  	</div>

	  	<div class="form-group">
		    <label for="photo">Photo</label>
		    <input type="text" class="form-control" value="{{ old('photo') }}" name="photo" placeholder="Enter photo">
	  	</div>

	  	<button class="btn btn-primary">Submit</button>
	</form>
@endsection
