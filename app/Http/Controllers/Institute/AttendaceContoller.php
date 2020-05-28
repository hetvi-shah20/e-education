<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Student;
use App\Attendance;
use App\Batch;
use DB;

class AttendaceContoller extends Controller
{
    public function index($batch_id)
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        $student = Student::where('batch_id','=',$batch_id)->get();
        $batch = Batch::where('id','=',$batch_id)->get();
        foreach($batch as $batch)
        {
            $batch_Details = $batch;
        }
        $max = $batch_Details->maximum_strength;
        $show_counts = $student->count();

        $can_add_more = $max - $show_counts;
        $batch_name = $batch_Details->batch_name;
       
        return view('institute.attendance.attendance',compact('user_details','student','show_counts','batch_name','can_add_more'));
    }
    
    public function store($batch_id,Request $request)
    {
       $attendance = $request->get('attend');

       foreach($attendance as $key=>$name)
       {
        $student_attendance = new Attendance(array(
            'batch_id'=>$batch_id,
            'student_id'=>$key,
            'date'=>$request->get('date'),
            'status'=>$name
        ));
            $student_attendance->save();           
       }
       
       $notification = array(
        'message' => 'attendance taken sucessfully', 
        'alert-type' => 'success'
          );

       return \Redirect::route('instituteBatch')->with('notification',$notification);
    }
    
}