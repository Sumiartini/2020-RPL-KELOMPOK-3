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

    public function attendanceList()
    {
        $data = AttendanceList::join('students' , 'attendance_lists.user_id' , '=' , 'students.user_id')
                ->join('users' , 'attendance_lists.user_id' , '=' , 'users.id')
                ->join('class' , 'students.class_id' , '=' , 'class.id')
                ->orderBy('users.name', 'ASC')
                ->select('attendance_lists.id','students.nis','users.name','class.name_class','attendance_lists.presence')
                ->get();

    
        return view ('pages.teachers.attendanceList',compact('data'));
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

    public function generateAbsen($id)
     {    
         $cek_date = AttendanceList::whereDate('created_at', Carbon::today())->first();
        // dd($cek_date);
         if ($cek_date) {
            $student = Student::all();
            if ($id) {
                 $input = AttendanceList::whereId($id)->first();
                 $input->presence         = '0';
                 $input->save();
                 return back()->withSuccess('Import Berhasil');
            }else{
                return back()->withInfo('data tidak ada');
            }
             
         } else {
             return back()->withToastError('gagal');    
             }
           
             
    }  
    public function generateSick($id)
     {    
        //dd($id);
            if ($id) {
                 $input  = AttendanceList::whereId($id)->first();
                 $input->presence = '2';
                 $input->save();
                 return back()->withSuccess('Dia Sakit');
            }else{
                return back()->withInfo('data tidak ada');
            }
           
             
    }  
    public function generatePermission($id)
     {    
         //dd($id);
            if ($id) {
                 $input  = AttendanceList::whereId($id)->first();
                 $input->presence = '3';
                 $input->save();
                 return back()->withSuccess('Dia Izin');
            }else{
                return back()->withInfo('data tidak ada');
            }
           
             
    }  
    public function generateSkip($id)
     {    
         //dd($id);
            if ($id) {
                 $input  = AttendanceList::whereId($id)->first();
                 $input->presence = '4';
                 $input->save();
                 return back()->withSuccess('Dia Alfa');
            }else{
                return back()->withInfo('data tidak ada');
            }
           
             
    }  
    


}
