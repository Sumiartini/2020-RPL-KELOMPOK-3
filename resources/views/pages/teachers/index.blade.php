@extends('layouts.TeacherMaster')
@section('content')

  <div class="row">
        <div class="col-lg-12">
          <div class="card">
          <!--   <div><a href="{{URL::to('/students/listofStudents')}}" class="btn btn-primary btn-block">List of Student</a></div> -->
          <a href="{{URL::to('/attendanceList')}}" class="btn btn-sm btn-warning waves-effect waves-green mr-1">Aktifkan Absen</a>
            <div class="card-header"><a style="font-size: 30px; "></a></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sumiartini sri rahayu</td>
                        <td>22 juni 2020 06.45</td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection 