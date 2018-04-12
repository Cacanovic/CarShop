@extends('layout.app2')

@section('title')
	Car Shop
@endsection

@section('content')
	<div class="col-lg-12">
	<h1>Kreiraj oglas za auto!</h1>
	
	@if(count($errors)>0)
					<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
					</div>
	@endif
	@if(isset($success))
	<div class="alert alert-success">
		<p>{{$success}}</p>
	</div>
	@endif
	@if(isset($greska)&&$greska!="")
	<div class="alert alert-danger">
		<p>{{$greska}}</p>
	</div>
	@endif
	<form action="{{ route('auto.dodaj') }}" method="post" enctype="multipart/form-data">
		<div class="col-lg-4" >
		<br>
		{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title: </label>
	 			<input type="text" name="title" class="form-control" value="{{ old('title') }}">
	 		</div>
			<div class="form-group">
				<label for="cijena">Cijena: </label>
	 			<input type="number" size="9" name="cijena" class="form-control" value="{{ old('cijena') }}">
	 		</div>
			<div class="form-group">
				<label for="kilometraza">Kilometraza: </label>
	 			<input type="number" size="9" name="kilometraza" class="form-control" value="{{ old('kilometraza') }}">
	 		</div>
			<div class="form-group">
				<label for="godiste">Godiste: </label>
	 			<input type="number" size="9" name="godiste" class="form-control" value="{{ old('godiste') }}">
	 		</div>

			<div class="form-group">
				<label for="model">Drzava:</label>
				<select class="form-control decorated" id="drzava" name="drzava">
					@foreach($drzave as $drzava)
						<option value="{{$drzava->id}}">{{$drzava->naziv}}</option>
					@endforeach		
				</select>				
			</div>

			<div class="form-group">
				<label for="model">Grad:</label>
				<select class="form-control" id="grad" name="grad">
					<option value="1">Svi Gradovi</option>
				</select>			
			</div>

			<div class="form-group">
				<label for="model">Proizvodjac:</label>
				<select class="form-control" id="proizvodjac" name="proizvodjac">
					@foreach($proizvodjaci as $proizvodjac)
						<option value="{{$proizvodjac->id}}">{{$proizvodjac->naziv}}</option>
					@endforeach	
				</select>			
			</div>

			<div class="form-group">
				<label for="model">Model:</label>
				<select class="form-control" id="model" name="model">
					<option value="1">Svi Modeli</option>
				</select>			
			</div>
			<div class="form-group">
				<label for="gorivo">Gorivo:</label>
				<select class="form-control" id="gorivo" name="gorivo">
					<option value="Benzin">Benzin</option>
					<option value="Dizel">Dizel</option>
					<option value="Plin">Plin</option>
				</select>			
			</div>
			<div class="form-group">
				<label for="stanje">Stanje:</label>
				<select class="form-control" id="stanje" name="stanje">
					<option value="Polovno">Polovno</option>
					<option value="Novo">Novo</option>
					<option value="Osteceno">Osteceno</option>
				</select>			
			</div>

			<div>
				<label for="naslovna_slika">Naslovna Slika</label>
				<input type="file" name="naslovna_slika">
			</div>
			<div>
				<label for="galerija">Galerija Slika</label>
				<input type="file" name="galerija[]" multiple>
			</div>

		</div>
	 	
	 	<div class="col-lg-4" ">
	 		<h3 style="text-align: center">Oprema koju posjeduje: </h3>
	 		@foreach($oprema as $op) 			
	 			<label class="form-control"><input type="checkbox" name="oprema[]"  value="{{$op->id}}"> {{$op->naziv}}</label>
	 		@endforeach
	 	</div>
	 	
	 	<div class="col-lg-4" ">
	 		<h3 style="text-align: center">Specifikacije: </h3>
	 		
	 		<div class="form-group">
		 		<p>Prenos: </p>
		 		<label class="form-control"><input type="radio" name="prenos" value="Manuelni">Manuelni</label>
		 		<label class="form-control"><input type="radio" name="prenos" value="Automatik">Automatik</label>	 			
	 		</div>


	 		<div class="form-group">
				<label for="kapacitet">Kapacitet Goriva: </label>
	 			<input type="number" size="9" name="kapacitet" class="form-control" value="{{ old('kapacitet') }}">
	 		</div>

	 		<div class="form-group">
				<label for="potrosnja">Potrosnja: </label>
	 			<input type="number" size="9" name="potrosnja" class="form-control" value="{{ old('potrosnja') }}">
	 		</div>

	 		<div class="form-group">
				<label for="vrata">Broj vrata: </label>
	 			<input type="number" size="9" name="vrata" class="form-control" value="{{ old('vrata') }}">
	 		</div>

	 		<div class="form-group">
				<label for="sjedista">Broj Sjedista: </label>
	 			<input type="number" size="9" name="sjedista" class="form-control" value="{{ old('sjedista') }}">
	 		</div>

	 		<div class="form-group">
				<label for="Pogon">Pogon: </label>
	 			<input type="type" name="pogon" class="form-control" value="{{ old('pogon') }}">
	 		</div>

	 		<div class="form-group">
				<label for="enterijer">Boja Enterijera: </label>
	 			<input type="type" name="enterijer" class="form-control" value="{{ old('enterijer') }}">
	 		</div>

	 		<div class="form-group">
				<label for="eksterijer">Boja Eksterijera: </label>
	 			<input type="type" name="eksterijer" class="form-control" value="{{ old('eksterijer') }}">
	 		</div>

	 	</div>
	 		<div class="form-group" >
	 			<button style="margin-top:20px" class="form-control btn btn-success" type="submit"><strong>Dodaj</strong></button>
	 		</div>
	 </form>
	</div>
	
@endsection