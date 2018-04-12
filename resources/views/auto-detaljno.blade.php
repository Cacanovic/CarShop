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

		    <div class="col-md-6" >
		      <div class="box1" >

		    	 @include("inc.carousel1")
		    	 @include("inc.car-details")

		      </div>
		    </div>

		    <div class="col-md-3" >		      	 
		      	
		      		@include("inc.car-details-right")       

		    </div>
	  </div>
	</div>
@endsection