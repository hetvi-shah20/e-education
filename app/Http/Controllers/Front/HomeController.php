<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view ('front.home');
    }

    public function contactStore(Request $request)
    {
        $contact = new Contact(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'msg'=>$request->get('msg')

        ));
        $contact->save();

        $data = array('email'=>$request->get('email'),'name'=>$request->get('name'),'msg'=>$request->get('msg'));
   
        Mail::send('front.mail',["data1"=>$data],function($msg) use ($data){
            $msg -> to('e.education456@gmail.com')->subject('inquiry mail');
            $msg -> from('test2098@gmail.com','hetvi');
        });


        return redirect()->back(); 

    }

    public function enquiryStore(Request $request)
    {
        

    }
}
