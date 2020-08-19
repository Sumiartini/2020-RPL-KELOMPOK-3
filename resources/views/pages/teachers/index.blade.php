@extends('layouts.AdminMaster')
@section('content')
<a href="#">Link</a>
<a href="{{URL::to('admin/generate-absen')}}" class="btn waves-effect waves-green ">Aktifkan Absen</a>


	<table border="1">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>status</td>
					
			<td>Option</td>	
		</tr>
		<!--  -->
	</table>

		  
@endsection