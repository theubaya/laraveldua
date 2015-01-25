@extends("back.layout.default")
@section("main")
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Input Artikel</div>
		<div class="panel-body">
			
			<div class="form-horizontal" role="form">
				<div class="form-group">
					<label for="judul" class="col-md-4 control-label">Judul Berita :</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="judul">
					</div>
				</div>
				<div class="form-group">
					<label for="penulis" class="col-md-4 control-label">Penulis Artikel :</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="penulis">
					</div>
				</div>
				<div class="form-group">
					<label for="isi" class="col-md-4 control-label">Isi Artikel :</label>
					<div class="col-md-4">
						<textarea class="form-control" rows="6" id="isi"></textarea>
					</div>
				</div>

				<div class="form-group" align="center">
			      <button type="submit" class="btn btn-default">Proses</button>
			      <button type="submit" class="btn btn-default">Preview (pake modal)</button>
			      <button type="reset" class="btn btn-default">Reset</button>
			  	</div>

			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Daftar Artikel</div>
		<div class="panel-body">
			<h1>disini tabel artikel</h1>
			Editing pake Modal <br>


			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			<h1>disini pagination</h1>
		</div>
	</div>
</div>
@stop