@extends("back.layout.default")
@section("main")
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Tambah Pengguna</div>
		<div class="panel-body">

			<!-- <form  class="form-horizontal" role="form"> -->
			{{ BootForm::openHorizontal(4,8) }}
				<!-- <div class="form-group">
					<label for="nama" class="col-md-4"> Nama :</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="nama"> 
					</div>
				</div> -->
				  {{ BootForm::text('Nama', 'nama') }}
<!-- 
				<div class="form-group">
					<label for="email" class="col-md-4"> Email :</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="email"> 
					</div>
				</div> -->
				  {{ BootForm::email('Email', 'email') }}

<!-- 
				<div class="form-group">
					<label for="password" class="col-md-4"> Password :</label>
					<div class="col-md-4">
						<input type="password" class="form-control" id="password"> 
					</div>
				</div> -->
				{{ BootForm::password('Password', 'password') }}
				<!-- <div class="form-group">
					<label for="kpassword" class="col-md-4"> Konfirm Password :</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="kpassword"> 
					</div>
				</div> -->
				{{ BootForm::password('Konfirmasi Password', 'repassword') }}

				<div class="form-group" align="center">
					<button type="submit" class="btn btn-default">Simpan</button>
					<button type="reset" class="btn btn-default">Reset</button>
				</div>
				<!-- <div class="form-group" align="center">
				{{ BootForm::submit('Submit') }}
				{{ BootForm::button('reset','reset') }}
				</div> -->
			{{ Form::close() }}	
			<!-- </form> -->
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"> Daftar Pengguna</div>
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
@stop