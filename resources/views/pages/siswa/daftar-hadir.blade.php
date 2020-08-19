@extends('layouts.StudentMaster')
@section('content')
	<table border="1">
		<a href="{{URL::to('/tambah')}}">Tambah Guru</a>
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>status</td>
					
			<td>Option</td>	
		</tr>
		@foreach($absen as $data)
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->student_name}}</td>
			<td>{{$data->kehadiran}}</td>
			
		</tr>
		@endforeach
	</table>
@endsection