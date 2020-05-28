<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Main_Registration;
use App\Profile_setup;
use App\Http\Requests\AdminLoginRequest;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.pages.authentication.login');
    }

    public function store(AdminLoginRequest $request)
    {
        // if(isset($request->email))
        //     {
        //         $notification = array(
        //             'message' => 'Please continue with your facebook or google account', 
        //             'alert-type' => 'error'
        //              );
        //             return redirect()->back()->with('notification',$notification);
        //     }
        //     else
        //     {
        //         return '2';
        //     }
        if(User::loginUser($request->email,$request->password,1))//Check UserName and Password
        {
            
           return \Redirect::route('dashboard');
        }
        elseif(User::loginUser($request->email,$request->password,2))
        {
            // if(exits($email))
            // {
            //     return '1';
            // }
            // else
            // {
            //     return '2';
            // }
            $email = $request->email;
            $data= User::where('email','=',$email)->pluck('id')->first();
            $details=Main_Registration::where('user_id','=',$data)->get();
            foreach($details as $mainRegistration)
            {
                $id =$mainRegistration->id;
            }
            $profile_setup = Profile_setup::where('main_id','=',$id)->get();
            if(count($profile_setup) == 0)
            {
                return \Redirect::route('instituteDashboard');
            }else{
                
                return \Redirect::route('instituteProfile');
            }
           
          
            
        }
        else
        {
                 $notification = array(
                'message' => 'Wrong username and password', 
                'alert-type' => 'error'
                 );
                return redirect()->back()->with('notification',$notification);
        }
    }
     public function logout()
        {
            \Auth::logout();
             return \Redirect::route('login');
        }
}
