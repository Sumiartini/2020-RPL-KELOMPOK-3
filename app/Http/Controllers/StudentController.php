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
        return view ('pages.siswa.index');
    }

    public function create()
    {
     //  
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
