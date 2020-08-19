
@extends('layouts.StudentMaster')
@section('content')
@csrf
<a href="{{URL::to('/students')}}">detail siswa</a>
	<table border="1">
		 <tr>
			<td>id</td>
			<td>Name</td>
			<td>status</td>
					
			<td>Option</td>	
		</tr>
		<!-- @foreach($absen as $data) 
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->student_name}}</td>
			<td>{{$data->kehadiran}}</td>
			
		</tr>
		@endforeach -->
	</table>
@endsection