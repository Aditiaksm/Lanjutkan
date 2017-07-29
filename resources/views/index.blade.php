@extends('layouts.master')
@section('isi')

		@foreach ($ortu as $key)<hr>
		Nama Ibu : {{$key->namaibu}}<br>
		Nama Ayah : {{$key->namaayah}}<br>
		Umur Ibu : {{$key->umuribu}}<br>
		umur Ayah : {{$key->umurayah}}<br>
		Nama Anak : 
		@foreach ($key->siswa as $data)
			<li>{{$data->nama}}</li>
		@endforeach
			<hr>
	@endforeach
@endsection