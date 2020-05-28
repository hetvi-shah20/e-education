<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Fee;
use Session;

class FeeController extends Controller
{
    public function store(Request $request,$course_id)
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();

        $option_name = $request->get('option_name');
       
        $if_exists = Fee::where('option_name','=',$option_name)->where('course_id','=',$course_id)->get();
       
        if($if_exists)
        {
            $notification = array(
                'message' => 'Option already added ', 
                'alert-type' => 'info'
                  );

        }   
        else{
            $option =  new Fee(array(
                'main_id'=>$main_id,
                'course_id'=>$course_id,
                'option_name'=>$request->get('option_name'),
                'fees'=>$request->get('fees'),
                'duration'=>$request->get('duration'),
                'status'=>'1',
            ));
            $option->save();
            $notification = array(
                'message' => 'Option added sucessfully', 
                'alert-type' => 'success'
                  );
        }     

        return redirect()->back()->with('notification',$notification);
        
    }

    public function updateOption(Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $option_id = $request->get('id');

        \DB::table('fees')
        ->where('id','=',$option_id)
        ->update(['option_name'=>$request->get('optionname'),
        'fees'=>$request->get('fees'),
        'duration'=>$request->get('duration')]);
            
                $notification = array(
                    'message' => 'option updated sucessfully', 
                    'alert-type' => 'success'
                      );
        
      return redirect()->back()->with('notification',$notification);
    }

    public function delete($id)
    {
        $option = Fee::find($id);
        $option->delete();
        $notification = array(
            'message' => 'Option deleted sucessfully', 
            'alert-type' => 'success'
              );

        return redirect()->back()->with('notification',$notification);
    }

}