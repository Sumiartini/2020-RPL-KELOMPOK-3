@extends('layouts.AttendanceListMaster')
@section('content')
    @section('title', 'Absent Input')
   <!-- End Breadcrumb-->
    @section('div')
          <a href="{{URL::to('/teachers')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Absent Input</a>
    @endsection
    @section('table')

              <table  class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
          
      @endsection
@endsection