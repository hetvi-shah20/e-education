<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseDropdownContoller extends Controller
{
    public function index()
    {
            $states = DB::table("courses")->pluck("course_name","id");
            return view('institute.attendance.batchadd',compact('states'));
    }


    
}
