<div class="box" >
	<div class="desno">
		<h2 style="  color: orange; margin-top: 0px; text-align: center; background-color: #101010; padding: 10px;">{{$auto->cijena}} KM</h2>
		<p><strong>{{$auto->drzav->naziv}}, {{$auto->grad1->naziv}}</strong> </p>
		<hr class="spec">
		<p ><strong>Cijena: </strong>{{$auto->cijena}} KM</p>
		<hr class="spec">
		<p ><strong>Prenos: </strong>{{$auto->specifikacija->prenos}}</p>
		<hr class="spec">
		<p ><strong>Kilometraza: </strong>{{$auto->kilometraza}} km</p>
		<hr class="spec">
		<p ><strong>Godiste: </strong>{{$auto->godiste}}</p>
		<hr class="spec">
		
		
	</div>

</div>

<div class="box" >

		
		<div class=" panel-group" id="accordion" role="tablist" aria-multiselectable="true">

			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<i class="more-less glyphicon glyphicon-minus"></i>
							PUNE SPECIFIKACIJE
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						  <p ><strong>Pogon: </strong>{{$auto->specifikacija->pogon}}</p>
						  <p ><strong>Gorivo: </strong>{{$auto->gorivo}}</p>
						  <p ><strong>Potrosnja: </strong>{{$auto->specifikacija->potrosnja}} L</p>
						  <p ><strong>Kapacitet goriva: </strong>{{$auto->specifikacija->kapacitet_goriva}} L</p>
						  <p ><strong>Broj sjedista: </strong>{{$auto->specifikacija->broj_sjedista}}</p>
						  <p ><strong>Broj vrata: </strong>{{$auto->specifikacija->broj_vrata}}</p>
						  <p ><strong>Prenos: </strong>{{$auto->specifikacija->prenos}}</p>
						  

					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="more-less glyphicon glyphicon-plus"></i>
							FINANSIRANJE
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="more-less glyphicon glyphicon-plus"></i>
							SIGURNOST
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="more-less glyphicon glyphicon-plus"></i>
							Trgovina
						</a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>

		</div><!-- panel-group -->
		
		
	</div><!-- container -->
