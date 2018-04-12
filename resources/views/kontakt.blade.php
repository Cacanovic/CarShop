@extends('layout.app')

@section('title')
	Car Shop
@endsection

@section('content')
	
	<div class="container texture">		
		<div class="row">
		    <div class="col-md-3" >
		      <div class="box" >	 
		      	
		      		@include('inc.search')	        

		      </div>
		    </div>
		    <div class="col-md-9" >
		      <div class="box" >
		      <div style="padding: 20px">
		      	
			      <h1>Kontaktirajte nas! </h1>
			      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
		      </div>
		      	<form action="#" method="POST">
		      		
		      	
		      		<label class="kon" for="ime">IME (OBAVEZNO)</label>
			      <div class=" kontakt input-group input-group-lg">
			        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
			        <input type="text" class="form-control" id="ime" aria-describedby="sizing-addon1">
			      </div>

			      <label class="kon" for="email">EMAIL (OBAVEZNO)</label> 
			      <div class=" kontakt input-group input-group-lg">
			        <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
			        <input type="text" id="email" class="form-control" aria-describedby="sizing-addon2">
			      </div>

			      <label class="kon" for="ime">TELEFON</label>
			       <div class=" kontakt input-group input-group-lg">
			        <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-phone" aria-hidden="true"></i></span>
			        <input type="text" class="form-control"  aria-describedby="sizing-addon3">
			      </div>
			      <label class="kon" for="poruka">PORUKA (OBAVEZNO)</label>
			      <div class="form-group">
			      	 <textarea id="poruka" class="form-control" rows="7" >	      
			     	 </textarea>
			      </div>
			      
			      	<button type="submit" class="btn crveni">Posalji!</button>
			    </form>  	
			     
		      </div>
		      </div>
		    </div>
	  </div>
	</div>
@endsection