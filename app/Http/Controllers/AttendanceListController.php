<?php

namespace App\Http\Controllers;

use App\AttendanceList;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceListController extends Controller
{
    public function index()
    {
     	return view('pages.index');
    }

    public function attendanceList(Request $request)
    {
        // $nis        = $request->input('nis');
        // $count      = Student::whereNis($nis)->count();
        // $Student    = Student::whereNis($nis)->first();

        // if($count == 1){
        //     $data = new AttendanceList();
        //     $data->user_id = $Student->id;
        //     $data->save();
        //     return view ('attendanceList');
        // } else {
        //     return "halo"; }
      return view('pages.attendanceLists.attendanceList');      
    }  

    public function AbsentInput()
    {
        return view ('pages.attendanceLists.AbsentInput');
    }
    // 	$data ['absen'] = Absen::join('students' , 'students.id_student' , '=' , 'attendance_lists.id_student')
    //     ->get();
    //
     


    //   public function generateAbsen()
    // {
    //     $now = Carbon::now()->format('Y-m-d');

    //     $cek_date = Absen::whereDateAttendance($now)->count();

    //     if ($cek_date == 0) {
    //         $student = Student::all();
    //         $no = 0;
    //         foreach ($student as $data) {
    //             $input = new Absen();
    //             $input->id_student          = $data->id_student;
    //             $input->presence            = '0';
    //             $input->date_attendance      = $now;
    //             $input->save();
    //             echo $no++;
    //         }
    //     } else {
    //         return 'tidak bisa';
    //     }//adminController
}
