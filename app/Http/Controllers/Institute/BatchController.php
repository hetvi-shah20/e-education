<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Batch;
use App\Main_Registration;
use App\Course;
use App\Http\Requests\Institute\BatchRequest;
use Auth;
use DB;

class BatchController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $batches = DB::table('batches')
                        ->join('courses','courses.id','=','batches.course_id')
                        ->select('batches.*','courses.course_name')
                        ->get();
        $course = Course::where('main_id','=',$main_id)->get();
        return view('institute.attendance.batch',compact('user_details','batches','course'));
    }

    public function view()
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $batches = DB::table('batches')
                        ->join('courses','courses.id','=','batches.course_id')
                        ->select('batches.*','courses.course_name')
                        ->get();
        $course = Course::where('main_id','=',$main_id)->pluck("course_name","id");
        return view('institute.attendance.batchadd',compact('user_details','batches','course'));
    }

    public function getOptionList(Request $request)
    {
            $cities = DB::table("fees")
            ->where("course_id",$request->course_id)
            ->pluck("option_name","id");
            return response()->json($cities);
    }

    public function store(BatchRequest $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $course_id = $request->get('course_id');
        $batch =  new Batch(array(
            'main_id'=>$main_id,
            'batch_name'=>$request->get('batch_name'),
            'course_id'=>$request->get('course_id'),
            'maximum_strength'=>$request->get('maximum_strength'),
            // 'option_name'=>$request->get('option_name'),
            'option_name'=>'NONE',
            'starting_month'=>$request->get('starting_month'),
            'starting_year'=>$request->get('starting_year'),
            'batch_time'=>$request->get('batch_time')
        ));
        $batch->save();

        $notification = array(
            'message' => 'Batch Added Sucessfully', 
            'alert-type' => 'success'
              );
        return \Redirect::route('instituteBatchList')->with('notification',$notification);
        

    }
}
