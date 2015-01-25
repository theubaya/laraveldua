@extends("back.layout.default")
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.theme.min.css')}}">
@stop
@section("main")
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Input Parameter Gempa Bumi</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="ot" class="col-md-4 control-label"> Origin Time (OT) 	:</label>
					<div class="col-md-4">
						{{ Form::text('ot',null,array('id'=>'ot','placeholder'=>'Ot','class'=>'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					<label for="lat" class="col-md-4 control-label"> Lintang 	:</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="lat">
					</div>
				</div>
				<div class="form-group">
					<label for="lon" class="col-md-4 control-label"> Bujur 	:</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="lon">
					</div>
				</div>
				<div class="form-group">
					<label for="dalam" class="col-md-4 control-label"> Kedalaman	:</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="dalam">
					</div>
				</div>
				<div class="form-group">
					<label for="mag" class="col-md-4 control-label"> Magnitudo	:</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="mag">
					</div>
				</div>
				<div class="form-group">
					<label for="ket" class="col-md-4 control-label"> Keterangan	:</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="ket">
					</div>
				</div>
				<div class="form-group" align="center">
				      <button type="submit" class="btn btn-default">Simpan</button>
				      <button type="reset" class="btn btn-default">Reset</button>
				</div>

			</form>
		</div>
	</div>
</div>

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"> Keterangan Gempa Bumi Dirasakan</div>
		<div class="panel-body">
			*belum selesai
		</div>
	</div>
</div>

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"> 30 Gempa Bumi Terakhir</div>
		<div class="panel-body">
			*Daftar Gempa BUmi belum selesai
		</div>
	</div>
</div>

@stop
@section('js')
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.datetimepicker.js') }}"></script>
<script>
$(function(){
	$("#ot").datetimepicker({
		format :'Y-m-d H:i:s'
	});
});	
</script>
@stop
