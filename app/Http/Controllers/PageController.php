<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendanceList;

class PageController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function AttendaceList()
    {
    	return view('pages.teachers.attendanceList');
    }
}