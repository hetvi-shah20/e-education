<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Course;

class AllCourseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        $main_id = Main_Registration::where('user_id','=',$id)->pluck('id')->first();
        $course = Course::where('main_id','=',$main_id)->get();
        return view('institute.pages.dashboard.all_course',compact('user_details','course'));

    }


    public function test()
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        $main_id = Main_Registration::where('user_id','=',$id)->pluck('id')->first();
        $course = Course::where('main_id','=',$main_id)->get();
        return view('institute.pages.dashboard.test',compact('user_details','course'));
    }

}
