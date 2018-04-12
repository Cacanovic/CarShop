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
		      <div class="box1" >

		      	@include('inc.carousel')

		      	@include('inc.auta')
		      </div>
		    </div>
	  </div>
	</div>
@endsection