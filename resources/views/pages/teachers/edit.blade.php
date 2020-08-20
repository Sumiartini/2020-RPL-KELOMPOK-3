@extends('layouts.TeacherMaster')
@section('content')

<html>
<head>
	<title>Edit Student</title>
</head>
<body>
	<table align="center">
		<form method="POST">
		@csrf	
			<tr>
				<td>Name</td>
				<td>:</td>
				<td>
					<input type="hidden" name="id" value="">
					<input type="text" name="" value="">
				</td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>
					<input type="text" name="" value="">
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="" value="Male">Male</input>
					<input type="radio" name="" value="Female">Female</input>
					
				</td>
			</tr>
			<tr align="center">
				<td></td>
				<td></td>
				<td>
					<input type="submit" value="Save">
				</td>
			</tr>
			
		</form>
	</table>
	
</body>
</html>

@endsection