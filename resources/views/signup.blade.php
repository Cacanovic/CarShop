@extends('layout.app')

@section('title')
	Car Shop
@endsection

@section('content')
	<div class="container box3">
	
		<div class="col-md-4 col-md-offset-4 ">
		<h1>Kreiranje naloga</h1>
			@if(count($errors)>0)
					<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
					</div>
			@endif
			<form action="{{route('user.signup')}}" method="POST">

				<div class="form-group">
					<label for="ime">Ime:</label>
					<input type="text" name="ime" id="ime" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="telefon">Broj Telefona:</label>
					<input type="text" name="telefon" id="telefon" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Sifra:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button type="submit" class="form-control">Kreiraj Nalog</button>
				{{csrf_field()}}
			</form>

		</div>
	</div>
@endsection