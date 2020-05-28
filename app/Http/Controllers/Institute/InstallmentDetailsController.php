<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Student;
use App\Batch;
use App\Course;
use App\Installment;
use App\Profile_setup;

class InstallmentDetailsController extends Controller
{
    public function index($student_id)
    {
        
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        $student_details = Student::where('id','=',$student_id)->get();
        foreach($student_details as $batch)
        {
            $batch_id = $batch->batch_id;

        }
        $batch_details = Batch::where('id','=',$batch_id)->get();
        foreach($batch_details as $course)
        {
            $course_id = $course->course_id;
        }
        $course_details = Course::where('id','=',$course_id)->get();
        $installment_details = Installment::where('student_id','=',$student_id)->get();
        $installment_count = count($installment_details);
        $payment_no = 1;
       
     
        return view('institute.pages.dashboard.installment_details',compact('user_details','student_details','batch_details','course_details','installment_count','installment_details','payment_no'));
    }

    public function store($student_id,Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        foreach($user_details as $profile_setup)
        {
            $profile_setup_id = $profile_setup->id;
        }
        $profile_setup = Profile_setup::where('main_id','=',$profile_setup_id)->get();
        $installment = new Installment(array(
            'student_id'=>$student_id,
            'payment_amount'=>$request->get('payment_amount'),
            'date'=>$request->get('installment_date'),
            'remaining_amount'=>$request->get('remaining_amount'),
        ));
        $installment->save();
        $student_details = Student::where('id','=',$student_id)->get();
        foreach($student_details as $batch)
        {
            $batch_id = $batch->batch_id;

        }
        $batch_details = Batch::where('id','=',$batch_id)->get();
        foreach($batch_details as $course)
        {
            $course_id = $course->course_id;
        }
        $course_details = Course::where('id','=',$course_id)->get();
        $installment_details = Installment::where('student_id','=',$student_id)->get();
        $payment_no = 1;
        foreach ($installment_details as $amounts)
        {
            $amount[] = $amounts->payment_amount; 
        }
        
        $sum = array_sum($amount);
        return view('institute.pages.dashboard.invoice',compact('user_details','student_details','batch_details','course_details','installment_details','payment_no','sum','profile_setup'));
    }

}
