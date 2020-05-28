<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;



class AdminRegistrationController extends Controller
{
    public function index()
    {
        return view('admin.pages.authentication.registration');
    }

    public function store(AdminRequest $request)
    {
        $user =  new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'provider_id'=>'NONE',
            'password'=>bcrypt($request->get('password')),
            'role'=>'1',
            'otp'=>'000000',
            'status'=>'1',
         ));

        $user->save();
        
            // $data = array('email'=>$request->get('email'),'name'=>$request->get('name'));

            // Mail::send('admin.pages.authentication.mail',["data1"=>$data],function($msg) use ($data){
            //     $msg -> to($data['email'])->subject('Registration sucessfull mail');
            //     $msg -> from('test2098@gmail.com','hetvi');
            // });

            
             $notification = array(
            'message' => 'Registered successfully done and check your mail', 
            'alert-type' => 'success'
              );

        
        return \Redirect::route('login')->with('notification',$notification); 
    }
}

