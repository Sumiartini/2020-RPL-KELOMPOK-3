@extends('layouts.AttendanceListMaster')
@section('content')
    @section('title', 'kehadiran siswa')
   <!-- End Breadcrumb-->
    @section('div')
         <a href="{{URL::to('/teachers')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Daftar Siswa</a>
    @endsection

    @section('table')
              <table id="default-datatable" class="table table-bordered">
                <thead>
                <a href="{{URL::to('/teachers/create')}}" class="btn btn-primary btn-sm">tambah</a>
                    <tr>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{URL::to('/teachers/{id}/edit')}}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{URL::to('/teachers/destroy')}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
          
      @endsection
@endsection