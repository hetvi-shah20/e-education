<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstituteLoginRequest;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('institute.pages.authentication.login');
    }

    public function login(InstituteLoginRequest $request)
    {
          if(User::loginUser($request->email,$request->password))//Check UserName and Password
          {
            $notification = array(
                'message' => 'Welcome', 
                'alert-type' => 'sucess'
                 );
              return \Redirect::route('instituteDashboard')->with('notification',$notification);
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