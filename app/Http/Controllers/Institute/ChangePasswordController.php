<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Http\Requests\Institute\ChangePassword;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\User;
use Hash;
use App\Profile_setup;
use App\Course;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        return view('institute.pages.authentication.changepassword',compact('user_details'));
    }

    public function sendlink($user_id,ChangePassword $request)
    {
        $old = $request->get('old_password');
        $new  = $request->get('password');
        

        $user_password = User::where('id','=',$user_id)->pluck('password')->first();
      
        if(Hash::check($old,$user_password))
        {
               \DB::table('users')
                    ->where('id','=',$user_id)
                    ->update(['password'=>bcrypt($request->get('password'))]);

                    $user = Auth::user();
                    $id = $user->id;
                    $user_details = Main_Registration::where('user_id','=',$id)->get();
                    foreach($user_details as $details)
                    {
                            $main_id= $details->id;
                    }
                    $course_details = Course::where('main_id','=',$main_id)->get();
                    $profile_setup = Profile_setup::where('main_id','=',$main_id)->get();
                    $rowcount = count($course_details);

                     $notification = array(
                    'message' => 'Your password changed successfully', 
                    'alert-type' => 'success'
                      );
                     
                
                return \Redirect::route('instituteProfile',compact('user_details','rowcount','profile_setup'))->with('notification',$notification); 
        }
        else{

            $notification = array(
                'message' => 'Incorrect old password', 
                'alert-type' => 'error'
                  );
        
            
            return redirect()->back()->with('notification',$notification); 
          
        }
       
        

       

        
         
    }
}