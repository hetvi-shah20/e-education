<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;


class MailsendController extends Controller
{
    public function mailsend(Request $request)
    {
            $data = array('email'=>$request->get('email'),'message'=>$request->get('mailbody'),'file'=> \Input::file('file')->getClientOriginalName());
            Mail::send('AdminPanel.pages.mail',["data1"=>$data],function($msg) use ($data){
                $msg -> to($data['email'])->subject('Message from admin');
                $msg -> attach($data['file']);
                $msg -> from('test2098@gmail.com','hetvi');
            });
            $notification = array(
                'message' => 'Mail Sent', 
                'alert-type' => 'success'
                  );
            return redirect()->back()->with('notification',$notification);
    }
}
