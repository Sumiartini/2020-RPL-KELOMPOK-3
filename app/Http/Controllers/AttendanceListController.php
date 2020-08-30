<?php

namespace App\Http\Controllers;

use App\AttendanceList;
use App\Student;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceListController extends Controller
{
    public function index()
    {
     	return view('pages.index');
    }

    public function AbsentInput(Request $request)
    {
        $nis = $request->nis;
        $student  = Student::join('users', 'students.user_id', '=', 'users.id')
        ->whereNis($nis)->first();

        if ($student) {
            $cek = AttendanceList::whereUserId($student->user_id)
            ->whereDate('created_at', Carbon::now())->count();

           
          
            if ($cek == '0') {
                
                 $input                   = new AttendanceList;
                 $input->user_id          = $student->user_id;
                 $input->presence         = '0';
                 $input->save();
                 return back()->withSuccess($student->name. '  Absen Berhasil');

    
            } elseif( $cek == '1') {
                 return back()->withInfo($student->name. '  Sudah absen');
            }
         } else {
             return back()->withInfo('Nis  ' . $nis . '  Tidak ditemukan');
         }
        //  $nis            = $request->input('nis');
        //  $Student        = Student::join('users','users.id' ,'=','students.user_id')
        //                  ->whereNis($nis)->first();
        //                 // cara mengambil data login atau SESSION
        //                 //  Auth::user()->id / email / name / 
                        
        // if ($Student)
        // {
            
        //     $attendance    = AttendanceList::whereUserId($Student->user_id)
        //                  ->whereDate('created_at', Carbon::today())
        //                  ->wherePresence('0')->first();


        //         if ($attendance) 
        //         {
        //             $attendance->presence = '1';
        //             $attendance->save();
        //             return back()->withSuccess($Student->name. '  Absen Berhasil');
        //         }else
        //         {
        //             return back()->withInfo($Student->name. '  Sudah absen');
        //         }   
                
        // }else{
        //     return back()->withInfo('Nis  ' . $nis . '  Tidak ditemukan');
        // }
         
    }  

    
    public function attendanceList()
    {
        $data = AttendanceList::join('students' , 'students.user_id' , '=' , 'attendance_lists.user_id')
                ->join('users' , 'users.id' , '=' , 'attendance_lists.user_id')
                ->join('class' , 'class.id' , '=' , 'students.class_id')
                ->get();

    
        return view ('pages.attendanceLists.attendanceList',compact('data'));
    }
     	
    
     


       public function generateAbsen()
     {    
         $cek_date = AttendanceList::whereDate('created_at', Carbon::today())->first();
         if ($cek_date) {
             return back()->withToastError('data sudah di import');
         } else {
            $student = Student::all();
            foreach ($student as $data) {
                 $input = new AttendanceList();
                 $input->user_id          = $data->user_id;
                 $input->presence         = '0';
                 $input->save();
                 
             }
             return back()->withSuccess('Import Berhasil');
         }
             
    }  
}
