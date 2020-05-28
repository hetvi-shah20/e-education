<?php

namespace App\Http\Controllers\Institute;
use Illuminate\Http\Request;
use App\Http\Requests\InstituteRegistrationRequest;
use App\Http\Requests\OtpRequest;
use App\Http\Requests\Institute\Registration_1;
use App\Http\Requests\Institute\Registration_2;
use App\Http\Requests\Institute\Registration_3;
use App\Http\Requests\Institute\Registration_5;
use App\Http\Controllers\Controller;
use App\User;
use App\Main_Registration;
use App\Service;
use Session;
use DB;
Use Redirect;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index()
    {
        $states = DB::table("states")->pluck("name","id");
        return view('institute.pages.authentication.registration',compact('states'));
    }

    public function store(Request $request)
    {
        $user =  new User(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'provider_id'=>'NONE',
            'avtar'=>'NONE',
            'password'=>'NONE',
            'role'=>'2',
            'status'=>'2',
            
        ));
        
        $otp = rand(100000,999999);
        $user->otp = $otp;
        $user->save();
        $states = DB::table("states")->pluck("name","id");

        // $data = array('email'=>$request->get('email'),'otp'=>$otp);

        //     Mail::send('institute.pages.authentication.mail',["data1"=>$data],function($msg) use ($data){
        //         $msg -> to($data['email'])->subject('OTP');
        //         $msg -> from('test2098@gmail.com','e-education');
        //     });
        $email = $request->get('email');
        Session::put('emailid',$email);
        $id = $user->id;
        Session::put('id',$id);
        return Redirect::to('/registration/'.'#verification');
        
        
    }



    public function verify(Request $request)
    {
        $id = Session::get('id');
        $verification_data = User::where('id','=',$id)->get()->first();
       
        $user = new User(array(
            'otp'=>$request->get('otp'),
        ));

        if($verification_data->otp == $user->otp)
        {
            $notification = array(
                'message' => 'Registred successfully', 
                'alert-type' => 'success'
                  );
            return back()->with(['tab'=>'pwdgeneration']);

        }
        else{
            $notification = array(
                'message' => 'Invalid or expired OTP', 
                'alert-type' => 'error'
                  );
                  return 'hello';
           
        }
        return \Redirect::route('instituteRegistration')->withInput(['tab'=>'pwdgeneration']);
        
      
    }


    public function pwdGeneration(Request $request)
    {
        $id = Session::get('id');
        \DB::table('users')
        ->where('id','=',$id)
        ->update(['password'=>bcrypt($request->get('password'))]);
        return \Redirect::route('instituteRegistration')->withInput(['tab'=>'service']);
        
        
    }

    public function service(Request $request)
    {
        $school = $request->get('institute_school');
        $college = $request->get('institute_college');
        $tuition = $request->get('institute_tuition');
        $enternce = $request->get('institute_enterance');
        $abroad = $request->get('institute_abroad');

        $id = Session::get('id');
        if(!empty($id))
        {
            if(!empty($school))
            {   if($school_items = implode(",",$school))
                {
                    $service = new Service(array(
                        'user_id'=>$id,
                        'service_name'=>'school',
                        'services'=>$school_items ,
                    ));
                    $service->save();
                }
            }
            else{

            }
            if(!empty($college))
            {
                if($college_items = implode(",",$college))
                {
                    $service = new Service(array(
                        'user_id'=>$id,
                        'service_name'=>'college',
                        'services'=>$college_items ,
                    ));
                    $service->save();
                }
            }
            else{

            }
            if(!empty($tuition))
            {
                if($tuition_items = implode(",",$tuition))
                {
                    $service = new Service(array(
                        'user_id'=>$id,
                        'service_name'=>'tuition',
                        'services'=>$tuition_items ,
                    ));
                    $service->save();
                
                }

            }
            else{

            }
            if(!empty($enternce))
            {
                if($enternce_items = implode(",",$enternce))
                {
                        $service = new Service(array(
                            'user_id'=>$id,
                            'service_name'=>'enternce',
                            'services'=>$enternce_items ,
                        ));
                        $service->save();
                }
            }else{

            }
            if(!empty($abroad))
            {
                if($abroad_items = implode(",",$abroad))
                {
                    $service = new Service(array(
                        'user_id'=>$id,
                        'service_name'=>'abroad',
                        'services'=>$abroad_items ,
                    ));
                    $service->save();
                
                }
            }
            else{

            }
        }
        else{
            return redirect()->back()->with(['tab'=>'service']); 
        }
        return \Redirect::route('instituteRegistration')->withInput(['tab'=>'profile']);
        
    
    }

    public function profile(Request $request)
    {
        
        $id = Session::get('id');
        $registration =  new Main_Registration(array(
            'user_id'=>$id,
            'address'=>$request->get('instituteaddress'),
            'state'=>$request->get('state'),
            'city'=>$request->get('city'),
            'email'=>$request->get('email'),
            'mobileno'=>$request->get('mobileno'),
            'landlineno'=>$request->get('landlineno'),
            'status'=>'0',
            
        ));
        if( $image = \Input::file('photo'))
        {
            $picname = str_random(30).'.'.$image->getClientOriginalExtension();
            $image->move(base_path().'/public/images/institute',$picname);
            $registration->avtar = $picname;
        }
        // else{

        //     $defaultimage = base_path().'/public/images/institute/default.jpg';
        //     $registration->avtar = $defaultimage;
            
        // }

        $registration->save();
        $main_id = $registration->id;
        Session::put('main_id',$main_id);

        // $data = array('email'=> Session::get('emailid'));
        // Mail::send('institute.pages.authentication.sucessmail',["data1"=>$data],function($msg) use ($data){
        //     $msg -> to($data['email'])->subject('sucessfully registred');
        //     $msg -> from('test2098@gmail.com','e-education');
        // });

        // Mail::send('institute.pages.authentication.adminmail',["data1"=>$data],function($msg) use ($data){
        //     $msg -> to('e.education456@gmail.com')->subject('new registration');
        //     $msg -> from('test2098@gmail.com','e-education');
        // });
        return redirect()->back()->with(['tab'=>'review']);

    }

    

}
