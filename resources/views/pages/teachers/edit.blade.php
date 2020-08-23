@extends('layouts.TeacherMaster')
@section('content')

		 <div class="row">
        <div class="col-lg-10  mx-auto">
         <div class="card">
			     <div class="card-body">
				   <div class="card-title">
				    <a href="{{URL::to('/teachers/listofStudents')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Edit Siswa</a>
					</div>
				   <hr>
				    <form>
					 <div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Nis</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" id="input-10" value="1819.10.089">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-11" class="col-sm-2 col-form-label">Nama</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" id="input-11" value="sumiartini">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-11" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" id="input-11" value="Perempuan">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-11" class="col-sm-2 col-form-label">Kelas</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" id="input-11" value="XII RPL2">
					  </div>
					</div>

		 			<div class="modal-footer">
                      <input type="submit" class="btn btn-success fa fa-check-square-o" data-dismiss="modal" value="simpan">
                    </div>
        </div>
      </div><!--End Row-->




				</div><!--wrapper-->
@endsection