<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Batch;
use App\Course;
use App\Student;
use App\Attendance;
use Excel;

class ReportController extends Controller
{
    public function index()
    { 
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        return view('institute.pages.dashboard.report',compact('user_details'));
    }

    public function view(Request $request)
    {

        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $start_date = $request->get('startdate');
        $end_date = $request->get('enddate');
        $option = $request->get('option');
       if($option == 1)
       {
            $batches = Batch::where('main_id','=',$main_id)
                            ->whereBetween('created_at',[$start_date,$end_date])
                            ->get();
            return view('institute.pages.dashboard.reportview',compact('user_details','batches','student'));
       }elseif($option == 2){
           
            $students = Student::whereBetween('admissiondate',[$start_date,$end_date])->get();
            return view('institute.pages.dashboard.reportview',compact('user_details','students','batches'));
       }else{

            
           
       }
    }


    public function downloadExcel(Request $request,$type)
	{
        $data = Batch::get()->toArray();
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data,$user_details) {
			$excel->sheet('mySheet', function($sheet) use ($data,$user_details)
	        {
				$sheet->loadView('institute.pages.dashboard.reportview',compact('user_details'));
	        });
		})->download($type);
	}

}
