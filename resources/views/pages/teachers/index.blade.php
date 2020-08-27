@extends('layouts.TeacherMaster')
@section('content')
Welcome  {{Auth::user()->name}}
  <div class="row">
        <div class="col-lg-12">
          <div class="card">
          <!--   <div><a href="{{URL::to('/students/listofStudents')}}" class="btn btn-primary btn-block">List of Student</a></div> -->
          <a href="{{URL::to('/teachers/attendanceList')}}" class="btn btn-sm btn-warning waves-effect waves-green mr-1">Aktifkan Absen</a>
            <div class="card-header"><a style="font-size: 30px; "></a></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>tgl/waktu absen</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @foreach($student as $e=>$s)
                    <tr>
                        <td>{{$e+1}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->name_class}}</td>
                        <td>{{$date->created_at ?? ''}}</td>
                     
                    </tr>
                  @endforeach
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>


@endsection 