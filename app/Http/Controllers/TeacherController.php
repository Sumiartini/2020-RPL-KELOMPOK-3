<?php

namespace App\Http\Controllers;

use App\AttendanceList;
use App\Teacher;
use App\Student;
use App\Classes;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');//tambahkan DisablePreventBack di kernel.php
    }

    public function index()
    {
       $student        = Student::join('users','users.id' ,'=','students.user_id')
                        ->join('attendance_lists','attendance_lists.user_id','=','students.user_id')
                        ->join('class','class.id','=','students.class_id')
                        ->wherePresence('1')
                        
                        ->get(); 
       
       $date = AttendanceList::whereDate('attendance_lists.created_at',Carbon::today());
      
        return view ('pages.teachers.index', compact('student', ['date'=>$date]));
    }

    public function listofStudents()
    {
        $students = Student::join('users','users.id' ,'=','students.user_id')
                           ->join('class','class.id','=','students.class_id')
                           ->whereClassId('1')
                           ->first();
        
            // dd($students);

        return view ('pages.teachers.listofStudents_rpl1',compact('students'));
    }
   
    public function create()
    {
        $class    = Classes::all();
        $id_class = Classes::first()->id;

        //dd($id_class);  
        return view ('pages.teachers.create', compact('class' , 'id_class'));
    }
  
    public function store(Request $request)
    {

        $nis    = $request->input('nis');
        $name   = $request->input('name');
            if ($nis) 
            {
                    if ($name) {
                    $user = new User();
                    $user->role_id  = '2';
                    $user->name     = $request->input('name');
                    $user->email    = $nis;
                    $user->password = Hash::make($nis);
                    //dd($user);
                    $user->save();

                    $student = new Student();
                    $student->user_id        = $user->id;
                    $student->class_id       = $request->input('class_id');
                    $student->nis            = $nis;
                    $student->gender         = 
                    $request->input('gender');
                    //dd($student);
                    $student->save();
                    return back()->withSuccess('Data anda sudah berhasil disimpan');
                    }else{
                        return back()->withInfo('Anda belum mengisi Nama');
                    }
                     
                    
                }else{
                     return back()->withInfo('Anda belum mengisi Nis');
                }   
        

        

        
    }

   public function edit($id)
    {
        $data = Student::join('class','class.id','=','students.class_id')
                       ->join('users','users.id' ,'=','students.user_id')
                       ->where('students.user_id','=',$id)
                       ->get();
         $class    = Classes::all();
         $id_class = Classes::first()->id;
        return view ('pages.teachers.edit',compact('data','class','id_class'));
    }

    public function update(Request $request)
    {

        $user_id = $request->input('user_id');
        $id      = $request->input('id');

         $data  = Student::join('class','class.id','=','students.class_id')
                           ->where('students.user_id','=',$user_id)
                           ->first();
         //dd($update);

            if ($data) {

                $user = User::whereId($id)->first();
                $user->name     = $request->input('name');
                $user->email    = $request->input('email');
                $user->password = $request->input('password');
                $user->role_id  = '2';
                $user->save();


                $student = Student::whereUserId($user_id)->first();
                $student->gender         = $request->input('gender');
                $student->class_id       = $request->input('class_id');
                $student->save();
                return redirect('/teachers/listofStudents')->withSuccess('Selamat Data Anda berhasil dirubah');
            }else{
                return back()->withToastError('Data belum diisi'); 
            }
        
        
        return redirect ('/teacher/{id}');
    }

    public function destroy($id)
    {
       $student = Student::whereUserId($id)->count();
        if ($student = '1') {
            $students = Student::whereUserId($id)->delete();
            return back()->withSuccess('data berhasil dihapus');
        }else{
            return back()->withInfo('data gagal dihapus');
        }
      
                 
       
    }
}
