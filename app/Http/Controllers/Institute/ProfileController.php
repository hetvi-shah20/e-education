<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Profile_setup;
use App\Course;
use App\Student;
use App\Batch;

class ProfileController extends Controller
{
    public function index()
    { 
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        foreach($user_details as $details)
        {
                $main_id= $details->id;
        }
        $course_details = Course::where('main_id','=',$main_id)->get();
        $student_details = Student::where('main_id','=',$main_id)->get();
        $batch_details = Batch::where('main_id','=',$main_id)->get();
        $profile_setup = Profile_setup::where('main_id','=',$main_id)->get();
        $rowcount = count($course_details);
        $batchcount = count($batch_details);
        $studentcount = count($student_details);
     
        return view('institute.pages.dashboard.profile',compact('batchcount','studentcount','user_details','rowcount','profile_setup'));
    }

   
}