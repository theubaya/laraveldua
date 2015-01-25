@extends("front.layout.default")
@section("main")

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"> Peta / Map</div>
		<div class="panel-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Ad deleniti aperiam, fuga fugiat ratione, eum sequi possimus 
			autem vel ut, dolor? Aliquid obcaecati placeat asperiores, beatae 
			harum quibusdam quo reprehenderit.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Ad deleniti aperiam, fuga fugiat ratione, eum sequi possimus 
			autem vel ut, dolor? Aliquid obcaecati placeat asperiores, beatae 
			harum quibusdam quo reprehenderit.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Ad deleniti aperiam, fuga fugiat ratione, eum sequi possimus 
			autem vel ut, dolor? Aliquid obcaecati placeat asperiores, beatae 
			harum quibusdam quo reprehenderit.
		</div>
	</div>
</div>
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"> Tentukan Parameter Gempa Bumi </div>
		<div class="panel-body">
			 <center> <b>Batas Waktu</b> </center>
			
			<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label for="tglAwal" class="col-md-4 control-label"></label>
			    <div class="col-md-4">
			      <input type="text" class="form-control" id="tglAwal" placeholder="Tanggal Awal">
			    </div>
			  </div>


			  <div class="form-group">
			    <label for="tglAkhir" class="col-md-4 control-label"></label>
			    <div class="col-md-4">
			      <input type="text" class="form-control" id="tglAkhir" placeholder="Tanggal Akhir">
			    </div>
			  </div>

			  <center> <b>Batas Koordinat</b> </center>
			  <div class="row">
			  <div class="col-md-2 col-md-offset-4">
			  <div class="form-group">
			    <label for="linAtas" class="col-md-0 sr-only control-label"></label>
			    <div class="col-md-12">
			      <input type="text" class="form-control" id="linAtas" placeholder="Lintang Atas">
			    </div>
			  </div>
			  </div>

			  <div class="col-md-2"> 
			  <div class="form-group">
			    <label for="linBawah" class="col-md-0 sr-only control-label"></label>
			    <div class="col-md-12">
			      <input type="text" class="form-control" id="linBawah" placeholder="Lintang Bawah">
			    </div>
			  </div>
			  </div>
			  </div>

			  <div class="row">
			  <div class="col-md-2 col-md-offset-4">
			  <div class="form-group">
			    <label for="jurKiri" class="col-md-0 sr-only control-label"></label>
			    <div class="col-md-12">
			      <input type="text" class="form-control" id="jurKiri" placeholder="Bujur Kiri">
			    </div>
			  </div>
			  </div>

			  <div class="col-md-2"> 
			  <div class="form-group">
			    <label for="jurKanan" class="col-md-0 sr-only control-label"></label>
			    <div class="col-md-12">
			      <input type="text" class="form-control" id="jurKanan" placeholder="Bujur Kanan">
			    </div>
			  </div>
			  </div>
			  </div>					 

			  <div class="form-group" align="center">
			      <button type="submit" class="btn btn-default">Proses</button>
			      <button type="reset" class="btn btn-default">Reset</button>
			  </div>
			</form>

		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"> Kejadian Vs Waktu </div>
			<div class="panel-body">
				<h1> DISINI GRAFIK NYA 1</h1>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"> Magnitudo Vs Waktu </div>
			<div class="panel-body">
				<h1> DISINI GRAFIK NYA 2</h1>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"> Kejadian Vs Kedalaman </div>
			<div class="panel-body">
				<h1> DISINI GRAFIK NYA 3</h1>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"> Magnitudo Vs Magnitudo </div>
			<div class="panel-body">
				<h1> DISINI GRAFIK NYA 4</h1>
			</div>
		</div>
	</div>
</div>
@stop