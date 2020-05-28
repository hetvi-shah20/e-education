<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Main_Registration;
use App\Batch;
use App\Student;

class BatchListController extends Controller
{
    public function view()
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $batches = DB::table('batches')
                        ->join('courses','courses.id','=','batches.course_id')
                        ->select('courses.*','batches.*')
                        ->get();
        return view('institute.attendance.batchlist',compact('user_details','batches'));
    }

    
}
