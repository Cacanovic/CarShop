
<div class="row ">

@foreach($auta as $auto)
  <div class="col-sm-6 col-md-4 oznaka">
  <div class="ribbon {{$auto->stanje}}"><span>{{$auto->stanje}}</span></div>
    <div class="thumbnail male-slike">
      <img src="storage/naslovneSlike/{{$auto->naslovna_slika}}">
      <div class="caption">
        <h4 class="auto-title">{{$auto->naziv}}</h4>
        <h4 class="cijena">{{$auto->cijena}} KM</h4>
        <p>{{$auto->kilometraza}} km</p>
        <p>{{$auto->drzav->naziv}}, {{$auto->grad1->naziv}}</p>
        <form action="{{route('pregled')}}" method="post">
          {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$auto->id}}">
           <button type="sumbit" class="btn detaljnije ">Pogledajte vise detalja!</button>
        </form> 
      </div>
    </div>
  </div>
 

@endforeach
</div>