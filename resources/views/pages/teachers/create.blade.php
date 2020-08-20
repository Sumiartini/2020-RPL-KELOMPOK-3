@extends('layouts.TeacherMaster')
@section('content')
<form method="POST">
	@csrf
	Nama<input type="text" name="teacher_name"></input><br><br>
	<input name="gender" type="radio" value="1" >Male</input><br><br>
	<input name="gender" type="radio" value="2" >Female</input><br><br>
	<input type="text" name="address"></input><br><br>
	<input type="text" name="id_subjects"></input><br><br>
	<input type="submit" value="simpan">
</form>
@endsection