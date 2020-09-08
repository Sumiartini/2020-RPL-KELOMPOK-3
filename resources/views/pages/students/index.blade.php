@extends('layouts.StudentMaster')
@section('content')

  <div class="row">
        <div class="col-lg-12">
          <div class="card">
           <div class="card-header"><a style="font-size: 20px; ">Riwayat Absensi</a></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>          
                        <th>tgl/waktu absen</th>
                        <th>kehadiran</th>
                    </tr>
                </thead>
                @foreach($attendanceList as $a)
                <tbody>
                    <tr>
                        <td>{{date('d/M/Y H:i:s', strtotime($a->created_at))}}</td>
                        <td>{{$a->presence}}</td>   
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