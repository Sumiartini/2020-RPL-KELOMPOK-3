@extends('layouts.TeacherMaster')
@section('content')

		 <div class="row">
        <div class="col-lg-10  mx-auto">
         <div class="card">
			     <div class="card-body">
				   <div class="card-title">
				    <a href="{{URL::to('/teachers/listofStudents')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Input Siswa</a>
					</div>
				   <hr>
				    <form>
					 <div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Nis</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" id="input-10" placeholder="Enter Nis">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-11" class="col-sm-2 col-form-label">Nama</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" id="input-11" placeholder="Enter Name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-12" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					  <div class="col-sm-30">
						<div class="form-check form-check-inline">
					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						  <label class="form-check-label" for="exampleRadios1">
							Laki-laki
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						  <label class="form-check-label" for="exampleRadios2">
							Perempuan
						  </label>
						</div>
				  </div>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-12" class="col-sm-2 col-form-label">Kelas</label>
					  
						<div class="card-body">
			                  <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                    Pilih kelas
			                  </button>
			                  <div class="dropdown-menu">
			                    <a href="javaScript:void();" class="dropdown-item">Action</a>
			                    <a href="javaScript:void();" class="dropdown-item">Another action</a>
			                    <a href="javaScript:void();" class="dropdown-item">Something else here</a>
			                    <div class="dropdown-divider"></div>
			                    <a href="javaScript:void();" class="dropdown-item">Separated link</a>
			                  </div>
				  		</div> 
					</div>
					
		 			<div class="modal-footer">
                      <input type="submit" class="btn btn-success fa fa-check-square-o" data-dismiss="modal" value="simpan">
                    </div>
        </div>
      </div><!--End Row-->




				</div><!--wrapper-->
@endsection