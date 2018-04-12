<div style="padding: 20px">
	<h3 class="title">Search</h3>

<form action="{{route('car.search')}}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<select class="form-control decorated" id="drzava" name="drzava">
			@foreach($drzave as $drzava)
				<option value="{{$drzava->id}}">{{$drzava->naziv}}</option>
			@endforeach		
		</select>				
	</div>
	<div class="form-group">
		<select class="form-control" id="grad" name="grad">
			<option value="1">Svi Gradovi</option>
		</select>			
	</div>
	<div class="form-group">
		<select class="form-control" id="proizvodjac" name="proizvodjac">
			@foreach($proizvodjaci as $proizvodjac)
				<option value="{{$proizvodjac->id}}">{{$proizvodjac->naziv}}</option>
			@endforeach	
		</select>			
	</div>
	<div class="form-group">
		<select class="form-control" id="model" name="model">
			<option value="1">Svi Modeli</option>
		</select>			
	</div>
	<div class="form-group">
		<h4 class="search-title">Gorivo</h4>
		 <label class="form-control"><input type="checkbox" name="gorivo"  value="Dizel"> Dizel</label>
		 <label class="form-control"><input type="checkbox" name="gorivo"  value="Benzin"> Benzin</label>
		 <label class="form-control"><input type="checkbox" name="gorivo"  value="Plin"> Plin</label>
		 <label class="form-control"><input type="checkbox" name="gorivo"  value="Hibrid"> Hibrid</label>
		 <label class="form-control"><input type="checkbox" name="gorivo"  value="Elektro"> Elektro</label>
	</div> 
	<div class="form-group">
		<h4 class="search-title">Stanje</h4>
		 <label class="form-control"><input type="checkbox" name="stanje" value="Novo"> Novo</label>
		 <label class="form-control"><input type="checkbox" name="stanje" value="Polovno"> Polovno</label>
		 <label class="form-control"><input type="checkbox" name="stanje" value="Osteceno"> Osteceno</label>
	</div> 

	<div>
		<h4 class="search-title"> Cijena : </h4>
		<h4><span id="cijenaMin">0</span> - <span id="cijenaMax">1000000</span> KM</h4>
		
		<div id="cijena"></div>
	</div>
	<div>
		<h4 class="search-title"> Kilometraza : </h4>
		<h4><span id="kilometriMin">0</span> - <span id="kilometriMax">400000</span> km</h4>
		<div id="kilometraza"></div>
	</div>
	<div>
		<h4 class="search-title"> Godiste : </h4>
		<h4><span id="godineMin">1980</span> - <span id="godineMax">2017</span> </h4>
		<div id="godiste"></div>
	</div>
	<br>
	
	<input style="color: red" type="hidden" name="cijenaMin1" id="cijenaMin1" >
	<input style="color: red" type="hidden" name="cijenaMax1" id="cijenaMax1">
	<input style="color: red" type="hidden" name="kilometrazaMin1" id="kilometrazaMin1">
	<input style="color: red" type="hidden" name="kilometrazaMax1" id="kilometrazaMax1">
	<input style="color: red" type="hidden" name="godisteMin1" id="godisteMin1">
	<input style="color: red" type="hidden" name="godisteMax1" id="godisteMax1">
	<input style="color: red" type="hidden" name="gorivo1" id="gorivo1">
	<input style="color: red" type="hidden" name="stanje1" id="stanje1">
	
	<div >
		<button type="submit" id="pretrazi" class="trazi" style="margin:0px auto"><i class="fa fa-search" aria-hidden="true"></i> Pretrazi</button>
	</div>


</form>
	

</div>