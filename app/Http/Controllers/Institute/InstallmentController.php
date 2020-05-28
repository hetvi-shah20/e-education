<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use DB;

class InstallmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        $student = DB::table('students')
                        ->join('batches','batches.id','=','students.batch_id')
                        ->where('students.installment_status','=',1)
                        ->select('students.*','batches.batch_name')
                        ->get();
        
        $installment_details = DB::table('students')
                        ->join('installments','installments.student_id','=','students.id')
                        ->select('installments.*')
                        ->get();
        
        return view('institute.pages.dashboard.installment_studentlist',compact('user_details','student'));
    }
}
