
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
   @foreach($auto->galerija as $gal)
   <?php $i=0; ?>
    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="{{ $i==0 ? 'active' : ''}}"></li>
    <?php $i=$i+1;?>
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

  <?php $i=0; ?>

    @foreach($auto->galerija as $gal)

      <div class="item {{ $i==0 ? 'active' : ''}}">
        <img style="width: 555px; height: 416px;" src="storage/galerija/{{$gal->naziv}}" >
        <div class="carousel-caption">
          <h3>{{$auto->naziv}}</h3>
        </div>
      </div>
      <?php $i=$i+1; ?>
    @endforeach
       

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>