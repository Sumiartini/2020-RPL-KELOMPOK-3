<?php

namespace App\Http\Controllers;

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
        return view ('pages.students.index');
    }

    public function show(Student $student)
    {
        //
    }
}
