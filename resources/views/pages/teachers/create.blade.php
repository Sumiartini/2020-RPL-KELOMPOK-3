
@extends('layouts.TeacherMaster')
@section('content')

		 <div class="row">
        <div class="col-lg-12">
         <div class="card">
			     <div class="card-body">
				   <div class="card-title">
				    <p>	Tambah Siswa </p>
					</div>
				   <hr>
				    <form action="/teachers/create" method="post">
				    	@csrf
					 <div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Nis</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control form-control" name="nis" id="input-10" placeholder="Enter Nis">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-11" class="col-sm-2 col-form-label">Nama</label>
					  <div class="col-sm-10">
						<input type="text" name="name" class="form-control form-control" id="input-11" placeholder="Enter Name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-12" class="col-sm-2 col-form-label">Jenis Kelamin</label>
					  <div class="col-sm-30">
						<div class="form-check form-check-inline">
					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="gender" value="Male" id="exampleRadios1" value="option1" checked>
						  <label class="form-check-label" for="exampleRadios1">
							Laki-laki
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="gender" value="Female" id="exampleRadios2" value="option2">
						  <label class="form-check-label" for="exampleRadios2">
							Perempuan
						  </label>
						</div>
				  </div>
					  </div>
					</div>  	
					  	<div class="form-group row">
						  <label for="basic-select" class="col-sm-2 col-form-label">Kelas</label>
				  			<div class="col-sm-10">
								<select class="form-control" name="class_id" id="basic-select">
								@if ($class->count())
		                          @foreach($class as $lists)
		                          <option value="{{$lists->id}}" {{$id_class == $lists->id ? 'selected="selected"' : ''}}>{{$lists->name_class}}</option>
		                          @endforeach
		                        @endif
                        		</select>
						    </div>
						</div>
				  		</div> 
					</div>
					
		 			<div class="modal-footer">
                      <input type="submit" class="btn btn-success fa fa-check-square-o" data-dismiss="modal" value="simpan">
                    </div>
                </form>
        </div>
      </div><!--End Row-->




				</div><!--wrapper-->
@endsection