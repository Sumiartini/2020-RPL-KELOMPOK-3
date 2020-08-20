<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');//tambahkan DisablePreventBack di kernel.php
    }

    public function index()
    {
        
        return view ('pages.teachers.index');
    }
   
    public function create()
    {
        //dd('halooo');
        return view ('pages.teachers.create');
    }
  
    public function store(Request $request)
    {
        return redirect ('/teachers');
    }

    public function show(Teacher $teacher)
    {
        return view ('pages.teachers.show');
    }

   public function edit()
    {
        return view ('pages.teachers.edit');
    }

    public function update(Request $request, Teacher $teacher)
    {
        return redirect ('/teacher/{id}');
    }

    public function destroy(Teacher $teacher)
    {
        //
    }
}
