<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Mail;
use App\User;

class ResendOtpController extends Controller
{
    public function resendOtp(Request $request)
    {
        $email = Session::get('emailid');
        $new_otp = rand(100000,999999);
    
        $verification_data = User::where('email','=',$email)->get()->first();
        \DB::table('users')
            ->where('email','=',$email)
            ->update(['otp'=> $new_otp,
                     ]);
            $data = array('email'=>$email,'otp'=>$new_otp);

            Mail::send('institute.pages.authentication.mail',["data1"=>$data],function($msg) use ($data){
                 $msg -> to($data['email'])->subject('OTP');
                  $msg -> from('test2098@gmail.com','e-education');
            }); 
            $notification = array(
                'message' => 'OTP sent again on your mail id', 
                'alert-type' => 'info'
                  );       
            return redirect()->back()->with('notification',$notification);        


    }
}
