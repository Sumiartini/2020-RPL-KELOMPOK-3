@extends('layouts.AdminMaster')
@section('content')
<a href="#">Link</a>
	<table border="1">
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
			
			<td><a href="{{URL::to('/edit-siswa', $data->id)}}">Delete</a>
				<a href="">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
	