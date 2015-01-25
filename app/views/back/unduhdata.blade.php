@extends("back.layout.default")
@section("main")
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Unduh Laporan Bulanan / Tahunan </div>
		<div class="panel-body">
			<form class="form" align="center">
				<div class="form-group">
				
					<div class="radio"> <input type="radio" name="bulanan" id="opsi1" value=""> Bulanan		: </div>
	        		<div class="radio"> <input type="radio" name="tahunan" id="opsi2" value=""> Tahunan		:</div>
				
				</div>
				<div class="form-group">
				
					<div class="radio"> <input type="radio" name="asws" id="opsi3" value=""> Bulanan		: </div>
	        		<div class="radio"> <input type="radio" name="sss" id="opsi4" value=""> Tahunan		:</div>
				
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default"> Unduh</button>
					<button type="submit" class="btn btn-default"> Plot di Peta</button>
				</div>
			</form>
		</div>
	</div>
</div>

@stop