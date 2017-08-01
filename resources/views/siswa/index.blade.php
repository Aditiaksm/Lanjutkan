@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right"><a href="/siswa/create">Tambah Data</a></div>
		</div>	
		<div class="panel-body">
			<table class="table">
				<thead>
				<tr>
					<th>Nama</th>
					<th>Nama Orangtua</th>
					<th>Umur</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th colspan="2">Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($siswa as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->orangtua->namaayah}} dan {{$data->orangtua->namaibu}}</td>
						<td>{{$data->umur}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->jk}}</td>
						<td>
						<td>
				<a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">Edit</a> </td>
					 <td>
					 <td>
					 <a class="btn btn-primary" href="/siswa/{{$data->id}}">Show</a> </td>
					 <td>
					<form action="{{route('siswa.destroy',$data->id)}}" method="post">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token">
						<input  class="btn btn-danger" type="submit" value="Delete">
						{{csrf_field()}}
					</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection