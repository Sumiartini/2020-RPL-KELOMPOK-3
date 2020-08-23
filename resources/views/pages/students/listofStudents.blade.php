@extends('layouts.StudentMaster')
@section('content')

  <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <div class="card-header"><a href="{{URL::to('/students')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Daftar Siswa</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>L</td>
                        <td>XII RPL</td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
  

@endsection