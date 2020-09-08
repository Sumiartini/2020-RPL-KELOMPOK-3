@extends('layouts.TeacherMaster')
@section('content')

        
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                   <div class="card-header">Daftar Kelas</div>
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
                        <td>{{$lists->presence}}</td>
                        <td>
                            <a href="{{URL::to('/teachers/')}}/{{$lists->user_id}}/edit" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{URL::to('/teachers/destroy/')}}/{{$lists->user_id}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
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