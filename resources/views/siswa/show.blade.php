@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('siswa.update',$siswa->id)}}" method="POST">
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="a" value="{{$siswa->nama}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
					<label class="control-lable">Nama Orang Tua</label>
						<select class="form-control" name="b">
						@foreach($ortu as $data)
							<option value="{{$data->id}}">{{$data->namaayah}} dan {{$data->namaibu}}</option>
						@endforeach
						</select>
				</div>
			<div class="form-group">
				<label class="control-lable">Umur</label>
					<input type="number" name="c" value="{{$siswa->umur}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="e" readonly="">{{$siswa->alamat}}</textarea>
			</div>
			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label>
				<input type="text" name="f" value="{{$siswa->jk}}" class="form-control" readonly="">
			</div>
		
			</form>
		</div>
	</div>
</div>
@endsection
