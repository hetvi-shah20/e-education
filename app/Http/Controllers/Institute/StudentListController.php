<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Student;
use App\Batch;
use DB;

class StudentListController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $student = DB::table('students')
                        ->join('batches','batches.id','=','students.batch_id')
                        ->select('students.*','batches.batch_name')
                        ->get();
        return view ('institute.attendance.studentlist',compact('user_details','student'));
    }

  

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        $notification = array(
            'message' => 'student deleted sucessfully', 
            'alert-type' => 'success'
              );

        return redirect()->back()->with('notification',$notification);
    }
}