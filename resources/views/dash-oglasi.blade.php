@extends('layout.app2')

@section('title')
	Car Shop
@endsection

@section('content')
	<div class="col-lg-12">
	@if(isset($success))		
			<p class="alert alert-success">{{$success}}</p>
		@endif
	<h1>Moji auto oglasi </h1>
	@if(count($auta)<1)
		<h2>Niste objavili jos ni jedan oglas !!!</h2>
	@else
		@foreach($auta as $auto)
		<div class="row" >
			<div class="col-lg-4">

				<img src="storage/naslovneSlike/{{$auto->naslovna_slika}}" height="160" width="260">
				<h1>{{$auto->naziv}}</h1>
				<hr>
			</div>
			<div class="col-lg-2">
				<form action="{{route('auto.edit')}}" method="post">
				{{csrf_field()}}
					<input type="hidden" name="id" value="{{$auto->id}}">
					<input type="submit" class="btn btn-success" name="Izmjeni" value="Izmjeni">
				</form>
				<form action="{{route('auto.delete')}}" method="post">
				{{csrf_field()}}
					<input type="hidden" name="id" value="{{$auto->id}}">
					<input type="submit" class="btn btn-danger" name="Obrisi" value="Obrisi">
				</form>
				<form action="{{route('pregled')}}" method="post">
				  {{ csrf_field() }}
				    <input type="hidden" name="id" value="{{$auto->id}}">
				   <input type="submit" class="btn btn-info " name="pogledaj" value="Pogledaj oglas!">
				</form> 
			</div>
	
		</div>
			


		@endforeach
	@endif
@endsection 