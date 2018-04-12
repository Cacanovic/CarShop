@extends('layout.app2')

@section('title')
	Car Shop
@endsection

@section('content')
	<div class="col-lg-12">
	@if(isset($success))
	<div class="alert alert-success">{{$success}}</div>
	@endif
	<h1>Izmjeni oglas!</h1>
	@if(count($errors)>0)
					<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
					</div>
			@endif
	<form action="{{ route('auto.izmjeni') }}" method="post" enctype="multipart/form-data">
		<div class="col-lg-4" >
		<br>
		{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title: </label>
	 			<input type="text" name="title" class="form-control" value="{{ $auto->naziv }}">
	 		</div>
			<div class="form-group">
				<label for="cijena">Cijena: </label>
	 			<input type="number" size="9" name="cijena" class="form-control" value="{{ $auto->cijena }}">
	 		</div>
			<div class="form-group">
				<label for="kilometraza">Kilometraza: </label>
	 			<input type="number" size="9" name="kilometraza" class="form-control" value="{{  $auto->kilometraza }}">
	 		</div>
			<div class="form-group">
				<label for="godiste">Godiste: </label>
	 			<input type="number" size="9" name="godiste" class="form-control" value="{{  $auto->godiste }}">
	 		</div>

			<div class="form-group">
				<label for="model">Drzava:</label>
				<select class="form-control decorated" id="drzava" name="drzava">
					@foreach($drzave as $drzava)
						@if($drzava->id==$auto->drzava)
							<option selected="selected" value="{{$drzava->id}}">{{$drzava->naziv}}</option>
						@else
							<option value="{{$drzava->id}}">{{$drzava->naziv}}</option>
						@endif
					@endforeach		
				</select>				
			</div>

			<div class="form-group">
				<label for="model">Grad:</label>
				<select class="form-control" id="grad" name="grad">
					@foreach($grad as $grad)
						@if($grad->id==$auto->grad)
							<option selected="selected" value="{{$grad->id}}">{{$grad->naziv}}</option>
						@else
							<option value="{{$grad->id}}">{{$grad->naziv}}</option>
						@endif
					@endforeach		
				</select>			
			</div>

			<div class="form-group">
				<label for="model">Proizvodjac:</label>
				<select class="form-control" id="proizvodjac" name="proizvodjac">
					@foreach($proizvodjaci as $proizvodjac)
						@if($proizvodjac->id==$auto->proizvodjac)
							<option selected="selected" value="{{$proizvodjac->id}}">{{$proizvodjac->naziv}}</option>
						@else
							<option value="{{$proizvodjac->id}}">{{$proizvodjac->naziv}}</option>
						@endif
					@endforeach	
				</select>			
			</div>

			<div class="form-group">
				<label for="model">Model:</label>
				<select class="form-control" id="model" name="model">
					@foreach($modeli as $model)
						@if($model->id==$auto->model)
							<option selected="selected" value="{{$model->id}}">{{$model->naziv}}</option>
						@else
							<option value="{{$model->id}}">{{$model->naziv}}</option>
						@endif
					@endforeach	
				</select>			
			</div>
			<div class="form-group">
				<label for="gorivo">Gorivo:</label>
				<select class="form-control" id="gorivo" name="gorivo">
					@foreach($gorivo as $gorivo)
						@if($gorivo==$auto->gorivo)
							<option selected="selected" value="{{$gorivo}}">{{$gorivo}}</option>
						@else
							<option value="{{$gorivo}}">{{$gorivo}}</option>
						@endif
					@endforeach
					
					
				</select>			
			</div>
			<div class="form-group">
				<label for="stanje">Stanje:</label>
				<select class="form-control" id="stanje" name="stanje">
					@foreach($stanje as $stanje)
						@if($stanje==$auto->stanje)
							<option selected="selected" value="{{$stanje}}">{{$stanje}}</option>
						@else
							<option value="{{$stanje}}">{{$stanje}}</option>
						@endif
					@endforeach
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
	 			@if(in_array($op->id, $oprema2))	
	 				<label class="form-control"><input type="checkbox" checked name="oprema[]"  value="{{$op->id}}"> {{$op->naziv}}</label>
	 			@else
	 				<label class="form-control"><input type="checkbox"  name="oprema[]"  value="{{$op->id}}"> {{$op->naziv}}</label>
	 			@endif
	 			
	 		@endforeach
	 	</div>
	 	
	 	<div class="col-lg-4" ">
	 		<h3 style="text-align: center">Specifikacije: </h3>
	 		
	 		<div class="form-group">
		 		<p>Prenos: </p>
		 		@foreach($specifikacija as $specifikacija)
		 		@if($specifikacija->prenos=='Manuelni')
			 		<label class="form-control"><input type="radio" checked name="prenos" value="Manuelni">Manuelni</label>
			 		<label class="form-control"><input type="radio" name="prenos" value="Automatik">Automatik</label>	 
			 	@else
			 		<label class="form-control"><input type="radio"  name="prenos" value="Manuelni">Manuelni</label>
			 		<label class="form-control"><input type="radio" checked name="prenos" value="Automatik">Automatik</label>
			 	@endif		
			 	@endforeach		
	 		</div>


	 		<div class="form-group">
				<label for="kapacitet">Kapacitet Goriva: </label>
	 			<input type="number" size="9" name="kapacitet" class="form-control" value="{{ $specifikacija->kapacitet_goriva }}">
	 		</div>

	 		<div class="form-group">
				<label for="potrosnja">Potrosnja: </label>
	 			<input type="number" size="9" name="potrosnja" class="form-control" value="{{ $specifikacija->potrosnja }}">
	 		</div>

	 		<div class="form-group">
				<label for="vrata">Broj vrata: </label>
	 			<input type="number" size="9" name="vrata" class="form-control" value="{{ $specifikacija->broj_vrata }}">
	 		</div>

	 		<div class="form-group">
				<label for="sjedista">Broj Sjedista: </label>
	 			<input type="number" size="9" name="sjedista" class="form-control" value="{{ $specifikacija->broj_sjedista }}">
	 		</div>

	 		<div class="form-group">
				<label for="Pogon">Pogon: </label>
	 			<input type="type" name="pogon" class="form-control" value="{{ $specifikacija->pogon }}">
	 		</div>

	 		<div class="form-group">
				<label for="enterijer">Boja Enterijera: </label>
	 			<input type="type" name="enterijer" class="form-control" value="{{ $specifikacija->enterijer }}">
	 		</div>

	 		<div class="form-group">
				<label for="eksterijer">Boja Eksterijera: </label>
	 			<input type="type" name="eksterijer" class="form-control" value="{{ $specifikacija->eksterijer }}">
	 		</div>

	 	</div>
	 		<div class="form-group" >
	 			<input type="hidden" name="id_auto" value="{{$auto->id}}">
	 			<input type="hidden" name="id_spec" value="{{$auto->specifikacija_id}}">
	 			<button style="margin-top:20px" class="form-control btn btn-success" type="submit"><strong>Sacuvaj</strong></button>
	 		</div>
	 </form>
	</div>
	
@endsection