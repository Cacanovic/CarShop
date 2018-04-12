<div class="container texture">
  <div>
    <a href="/"><img class="logo" src="storage/img/logo.png"> </a>
    <h1 class="pull-right">Najbolje mjesto za kupovinu auta!!!</h1>
    </div>
  <div class="navigacija">
      <ul>
        <li><a class="{{ Request::is('/') ? 'active' : ''}}" href="/">Home</a></li>
        <li><a class="{{ Request::is('auta') ? 'active' : ''}}" href="/auta">Pregled Auta</a></li>
        <li><a class="{{ Request::is('kontaktirajte-nas') ? 'active' : '' }}" href="/kontaktirajte-nas">Kontaktirajte nas</a></li>
        <li class="dropdown pull-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @if(Auth::check() )
            <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('user.logout')}}">Logout</a></li>
          @else
            <li><a href="{{ route('user.signup')}}">Sign Up</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('user.signin')}}">Sign In</a></li>

          @endif

          </ul>
        </li>
      </ul>
  </div> 
</div>