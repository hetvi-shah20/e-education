<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Student;
use App\Batch;
use App\Course;
use DB;

class BatchEditController extends Controller
{
    public function edit($id)
    {
        
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $batch = Batch::where('id','=',$id)->get();
        foreach($batch as $batch_details)
        {
          $course_id = $batch_details->course_id;
        }
        $course_details = Course::where('id','=',$course_id)->get();
        $courses = Course::where('main_id','=',$main_id)->get();
        return view('institute.attendance.batchedit',compact('user_details','courses','batch','course_details'));
    }

    public function update($id,Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $batches = Batch::where('main_id','=',$main_id)->get();
      

        \DB::table('batches')
            ->where('id','=',$id)
            ->update(['batch_name'=>$request->get('batch_name'),
                    'course_id'=>$request->get('course_id'),
                    'maximum_strength'=>$request->get('maximum_strength'),
                    'option_name'=>$request->get('option_name'),
                    'starting_month'=>$request->get('starting_month'),
                    'starting_year'=>$request->get('starting_year'),
                    'batch_time'=>$request->get('batch_time')]);

                if($request->get('status') == ""){
                        \DB::table('batches')
                            ->where('id','=',$id)
                            ->update(['status'=>'1']);
                }else{
                        \DB::table('batches')
                        ->where('id','=',$id)
                        ->update(['status'=>'0']);
                }
                $notification = array(
                    'message' => 'Batch Updated Sucessfully', 
                    'alert-type' => 'success');        
                       

       
        return \Redirect::route('instituteBatchList',compact('user_details','batches'))->with('notification',$notification);
        
        
    }
}
