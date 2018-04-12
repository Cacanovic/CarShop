@extends('layout.app')

@section('title')
	Car Shop
@endsection

@section('content')
	<div class="container box3">
	
		<div class="col-md-4 col-md-offset-4 ">
		<h1>Uloguj se</h1>
			@if(count($errors)>0)
					<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
					</div>
			@endif
			<form action="" method="POST">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Sifra:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button type="submit" class="form-control">Uloguj se</button>
				{{csrf_field()}}
			</form>

		</div>
	</div>
@endsection