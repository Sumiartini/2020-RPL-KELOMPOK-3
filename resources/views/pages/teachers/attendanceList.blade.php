
@extends('layouts.TeacherMaster')
@section('content')

       <!-- End Breadcrumb-->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-header"> Kehadiran Siswa </div>
                <div class="card-body">
                <div class="table-responsive">
            
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Kehadiran</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                @foreach($data as $a=>$e)
                <tbody>
                    <tr>
                        <td>{{$a+1}}</td>
                        <td>{{$e->nis}}</td>
                        <td>{{$e->name}}</td>
                        <td>{{$e->name_class}}</td>
                        <td>{{$e->presence}}</td>
                   
                        @if($e->presence == 0) 
                        <td>
                            <a href="{{URL::to('teachers/attendanceList/')}}/{{$e->id}}" class="btn btn-success btn-sm">Hadir</a>
                            <a href="{{URL::to('/teachers/')}}/{{$e->id}}/sick" class="btn btn-warning btn-sm">Sakit</a>
                            <a href="{{URL::to('/teachers/')}}/{{$e->id}}/permission" class="btn btn-info btn-sm">izin</a>
                            <a href="{{URL::to('/teachers/')}}/{{$e->id}}/skip" class="btn btn-secondary btn-sm">alpa</a>
                        </td>
                        @endif
                    
                    </tr>
                </tbody>
                @endforeach
            </table>
          
                </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection