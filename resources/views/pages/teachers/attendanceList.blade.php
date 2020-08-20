@extends('layouts.TeacherMaster')
@section('content')

<h1>Daftar Siswa</h1>
	
	<a href="{{URL::to('/teachers/create')}}" class="btn btn-primary btn-sm">tambah</a>

	<table border="1">
		<tr>
			<td>Nis</td>
			<td>Name</td>
			<td>Aksi</td>				
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td>
				<a href="{{URL::to('/teachers/{id}/edit')}}" class="btn btn-warning btn-sm">edit</a>
				<a href="{{URL::to('/teachers/destroy')}}" class="btn btn-danger btn-sm">hapus</a>
			</td>
		</tr>
	</table>

		  
@endsection