@extends('layouts.AttendanceListMaster')
@section('content')
    @section('title', 'Attendance List')
   <!-- End Breadcrumb-->
    @section('div')
          <a href="{{URL::to('/teachers')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Daftar Siswa</a>
    @endsection
    @section('table')

              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Kehadiran</th>
                    </tr>
                </thead>
                @foreach($data as $a)
                <tbody>
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->nis}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->name_class}}</td>
                        <td>{{$a->presence}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
          
      @endsection
@endsection