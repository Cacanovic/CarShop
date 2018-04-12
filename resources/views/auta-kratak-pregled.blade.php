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
		    	@foreach($auta as $auto)
			     	<div class="row box2">
			         	<div class="col-md-5 oznaka">
			         	<div class="ribbon1 {{$auto->stanje}}"><span>{{$auto->stanje}}</span></div>
			         		<img src="storage/naslovneSlike/{{$auto->naslovna_slika}}" style="width: 100%" height="200px">
			         	</div>
				        <div class="col-md-4 desna-linija">
				        	 <h4 class="auto-title">{{$auto->naziv}}</h4>
				        	 <p>{{$auto->kilometraza}} km</p>
				        	 <hr style="margin-top: 0px; border: 0.5px solid grey;">
				        	 <h4>{{$auto->stanje}} auto!</h4>
				        	 <div>
				        	 @foreach($auto->oprema as $oprema )
				        	 	<p class="osobine">{{$oprema->naziv}}</p>
				        	 @endforeach
				        	 </div>			        	 
				        </div>			        
				         <div class="col-md-3">
				        	<h3 >{{$auto->cijena}} KM</h3>
				        	<p class="desna-strana-auta">{{$auto->drzav->naziv}}, {{$auto->grad1->naziv}}</p>      
				        	<form action="{{route('pregled')}}" method="post">
				        	{{ csrf_field() }}
				        		<input type="hidden" name="id" value="{{$auto->id}}">
				        		<button type="sumbit" class="btn trazi desna-strana-auta">Pogledajte vise detalja!</button>
				        	</form>  	
				        </div>		      				      	 
				    </div>
			   
			    @endforeach
			   
		    </div>
		  



		    </div>
	  </div>
	</div>
@endsection