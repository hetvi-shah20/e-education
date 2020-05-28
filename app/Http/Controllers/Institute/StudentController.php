<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Course;
use App\Student;
use App\User;
use App\Batch;
use Mail;
use App\Http\Requests\Institute\StudentRequest;
use Illuminate\Support\Facades\Input;


class StudentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $course = Course::where('main_id','=',$main_id)->get();
        $batches = Batch::where('main_id','=',$main_id)->get();
        return view ('institute.attendance.studentadd',compact('user_details','course','batches'));
    }

    public function store(StudentRequest $request)
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();

        $student_user  =  new User(array(

            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'provider_id'=>'NONE',
            'avatar'=>'NONE',
            'password'=>bcrypt($request->get('name')),
            'role'=>'3',
            'otp'=>'0',
            'status'=>'0',
        ));
        $student_user->save();
        $user_id = $student_user->id;

        $student = new Student(array(
            'main_id'=>$main_id,
            'user_id'=>$user_id,
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'rollno'=>$request->get('rollno'),
            'phone_no'=>$request->get('phone_no'),
            'birthdate'=>$request->get('birthdate'),
            'gender'=>$request->get('gender'),
            'batch_id'=>$request->get('batch_id'),
            'fees'=>$request->get('fees'),
            'duration'=>$request->get('duration'),
            'admissiondate'=>$request->get('admissiondate'),
            'installment_count'=>$request->get('installment_count'),
        ));
        if(Input::get('installment_status') === '1') 
        { 
            $student->installment_status = '1';
                
        }else{
            $student->installment_status = '0';
           
        }
        if($image = \Input::file('photo') != "")
        { 
            if( $image = \Input::file('photo'))
            {
                $picname = str_random(30).'.'.$image->getClientOriginalExtension();
                $image->move(base_path().'/public/images/institute/student',$picname);
                $student->photo = $picname;
            }

        }
       else{

        }

        $student->save();

       

        // $data = array('email'=>$request->get('email'),'name'=>$request->get('name'));

        //     Mail::send('admin.pages.authentication.mail',["data1"=>$data],function($msg) use ($data){
        //         $msg -> to($data['email'])->subject('Registration sucessfull mail');
        //         $msg -> from('test2098@gmail.com','hetvi');
        //     });

        $notification = array(
            'message' => 'Student Added Sucessfully', 
            'alert-type' => 'success'
              );


        return \Redirect::route('instituteStudentList')->with('notification',$notification);
    }

    
   
}
