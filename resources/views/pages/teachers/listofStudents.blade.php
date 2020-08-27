@extends('layouts.AttendanceListMaster')
@section('content')
    @section('title', 'Daftar Siswa')
   <!-- End Breadcrumb-->
    @section('div')
         <a href="{{URL::to('/teachers')}}" class="fa fa-arrow-left" style="color: grey;"></a><a class="container">Daftar Siswa</a>
    @endsection

    @section('table')
              <table id="default-datatable" class="table table-bordered">
                <thead>
                <a href="{{URL::to('/teachers/create')}}" class="btn btn-primary btn-sm">tambah</a>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $no=>$lists)
                    <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$lists->nis}}</td>
                        <td>{{$lists->name}}</td>
                        <td>{{$lists->name_class}}</td>
                        <td>
                            <a href="{{URL::to('/teachers/')}}/{{$lists->user_id}}/edit" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{URL::to('/teachers/destroy/')}}/{{$lists->user_id}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
      @endsection
@endsection