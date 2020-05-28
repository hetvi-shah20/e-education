<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Student;
use App\Batch;
use DB;

class StudentEditController extends Controller
{
    public function edit($id)
    {
        
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $student=Student::where('id','=',$id)->get();
        $batches = Batch::where('main_id','=',$main_id)->get();
       foreach($student as $student_details)
       {
        $batch_id = $student_details->batch_id;
       }
        $batchname = Batch::where('id','=',$batch_id)->get();
        return view('institute.attendance.studentedit',compact('user_details','student','batchname','batches'));
    }

    public function update($id,Request $request)
    {
      
      
        \DB::table('students')
            ->where('id','=',$id)
            ->update(['name'=>$request->get('name'),
                    'email'=>$request->get('email'),
                    'rollno'=>$request->get('rollno'),
                    'phone_no'=>$request->get('phone_no'),
                    'birthdate'=>$request->get('birthdate'),
                    'gender'=>$request->get('gender'),
                    'batch_id'=>$request->get('batch_id'),
                    'fees'=>$request->get('fees'),
                    'duration'=>$request->get('duration'),
                    'admissiondate'=>$request->get('admissiondate')]);
                
                    $notification = array(
                        'message' => 'Student updated Sucessfully', 
                        'alert-type' => 'success'
                          );
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $student = DB::table('students')
                        ->join('batches','batches.id','=','students.batch_id')
                        ->select('students.*','batches.batch_name')
                        ->get();
        return \Redirect::route('instituteStudentList',compact('user_details','student'))->with('notification',$notification);
        
        
    }
}
