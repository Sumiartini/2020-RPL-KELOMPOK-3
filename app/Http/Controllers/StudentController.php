<?php

namespace App\Http\Controllers;

use Auth;
use App\AttendanceList;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  
 public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');
    }


    public function index()
    {
        $user = Auth::user();

        $attendanceList = AttendanceList::where('attendance_lists.user_id', $user->id)->get();
        return view ('pages.students.index',compact('attendanceList'));
    }

    public function listofStudents()
    {
        return view ('pages.students.listofStudents');
    }
}
