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
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
          
      @endsection
@endsection