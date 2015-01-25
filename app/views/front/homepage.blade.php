@extends("front.layout.default")
@section("main")
 <div class="row">
	<div class="panel panel-default">
  		<div class="panel-heading">Peta / MAP</div>
  		<div class="panel-body">
  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  		</div>
  	</div>
  </div>
  
  <div class="row">
  	<div class="panel panel-default">
  		<div class="panel-body">
  			
  			<!-- Nav tabs -->
			<ul class="nav nav-tabs">
			  <li class="active"><a href="#home" data-toggle="tab">30 Gempa Terkini</a></li>
			  <li><a href="#profile" data-toggle="tab">30 Gempa Terasa</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane active" id="home">
			  <ul class="list-goup">
			  	@foreach ($regional as $col)
			  		<li class="list-group-item">
			  			{{ $col->kota}}
			  		</li>
			  	@endforeach
			  </ul>
			  </div>
			  <div class="tab-pane" id="profile">
			  	<h1>Datanya masih kosong</h1>
			  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			  </div>
			</div>
  			
  		</div>
  	</div>
  </div>
  
  <div class="row">
  	<div class="col-md-6">
  	<div class="panel panel-default">
  		<div class="panel-heading">Artikel</div>
  		<div class="panel-body">
  				  	{{ $content }}
	  				ini isi artikel
	  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  		</div>
  	</div>
  	</div>
  	<div class="col-md-6">
	  	<div class="row">
	  		<div class="col-md-12">
	  		<div class="panel panel-default">
	  			<div class="panel-heading">Edukasi</div>
	  			<div class="panel-body">
					ini bagian edukasi

	  			</div>
	  		</div>

	  		</div>
	  		
	  	</div>
	  	
	  	<div class="row">
	  		<div class="col-md-12">
	  		<div class="panel panel-default">
	  			<div class="panel-heading"> Lain-lain</div>
	  			<div class="panel-body">
	  				<ul class="list-group">
	  					@foreach($regional as $col)
						<li class="list-group-item">
							{{ $col->kota }}
						</li>
	  					@endforeach
	  				</ul>
	  			</div>
	  		</div>
	  		</div>
	  	</div>

  	</div>

  </div>


@stop