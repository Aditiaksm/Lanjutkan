@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">kembali</a></div></div>

		<div class="panel-body">
			<div class="form-group">
				<label class="control-lable">Nama Ayah</label>
				<input type="text" name="a" value="{{$ortu->namaayah}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-lable">Nama Ibu</label>
					<input type="text" name="b" value="{{$ortu->namaibu}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-lable">Umur Ayah</label>
					<input type="number" name="c" value="{{$ortu->umurayah}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-lable">Umur Ibu</label>
					<input type="number" name="d" value="{{$ortu->umuribu}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="e" readonly="">{{$ortu->alamat}}</textarea>
			</div>
			
			</form>
		</div>
	</div>
</div>
@endsection
