@extends('layouts.StudentMaster')
@section('content')

  <div class="row">
        <div class="col-lg-12">
          <div class="card">
          <!--   <div><a href="{{URL::to('/students/listofStudents')}}" class="btn btn-primary btn-block">List of Student</a></div> -->
            <div class="card-header"><a style="font-size: 30px; ">Absensi Siswa</a></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sumiartini</td>
                        <td>Hadir</td>
                        <td>
                          
                          <button class="btn btn-primary m-1" data-toggle="modal" data-target="#defaultsizemodal">Detail</button>
                          <!-- Modal -->
                          <div class="modal fade" id="defaultsizemodal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title"><i class="fa fa-user-circle-o"></i>
                                     Personal Info</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Nis :</label>
                                      <div class="col-sm-10">
                                               <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="1819.10.089">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Nama :</label>
                                      <div class="col-sm-10">
                                               <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Sumiartini">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">JK :</label>
                                      <div class="col-sm-10">
                                               <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Perempuan">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Kelas :</label>
                                      <div class="col-sm-10">
                                               <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="XII RPL">
                                      </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection