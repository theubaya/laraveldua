<div class="container">
<ul class="nav nav-pills nav-justified" id="menu">
	<li class="{{ (Route::is('home') ? 'active' : '') }}"><a href="{{ URL::route('home') }}">Home</a></li>
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Info Gempa <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="{{ URL::route('front/terkini') }}">Gempa Terkini</a></li>
      <li><a href="{{ URL::route('front/terasa') }}">Gempa Terasa</a></li>
    </ul>
  </li>
	<li class="{{ (Route::is('front/statistikgempa') ? 'active' : '') }}"><a href="{{ URL::route('front/statistikgempa') }}">Statistik Gempa</a></li>
	<li class="{{ (Route::is('front/jaringansensor') ? 'active' : '') }}"><a href="{{ URL::route('front/jaringansensor') }}">Jaringan Sensor</a></li>
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Edukasi <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="{{ URL::route('home') }}">1</a></li>
      <li><a href="{{ URL::route('home') }}">2</a></li>
      <li><a href="{{ URL::route('home') }}">3</a></li>
      <li><a href="{{ URL::route('home') }}">4</a></li>
      <li><a href="{{ URL::route('home') }}">5</a></li>
    </ul>
  </li>
</ul>
</div>