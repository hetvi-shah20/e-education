<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Main_Registration;
use App\Profile_setup;
use App\State;

class EditProfileSetupController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        foreach($user_details as $details)
        {
                $main_id= $details->id;
        }
        $profile_setup = Profile_setup::where('main_id','=',$main_id)->get();
        foreach($user_details as $state_name)
        {
                $state_id =$state_name->state;
        }
        $state = State::where('id','=',$state_id)->get();
        $states= DB::table("states")->pluck("name","id");
       return view('institute.pages.dashboard.editprofile',compact('states','user_details','profile_setup','state'));
    }

    public function update_tab1($profile_id,Request $request){

        \DB::table('profile_setups')
            ->where('id','=',$profile_id)
            ->update(['clg_name'=>$request->get('clg_name'),
                    'year'=>$request->get('year'),
                    'stream'=>$request->get('stream'),
                    'type'=>$request->get('type'),
                    'exprience'=>$request->get('exprience'),
                    'jobprofile'=>$request->get('jobprofile')]);


                 $notification = array(
                 'message' => 'Details updated sucessfully you can update more details in next tab', 
                 'alert-type' => 'info'
                          );
            return redirect()->back()->with('notification',$notification);     
    
    }

    public function update_tab2($profile_id,Request $request){

        $board_university = $request->get('board_university');
     
        $board_university_name = implode(",",$board_university);
        
        \DB::table('profile_setups')
        ->where('id','=',$profile_id)
        ->update(['standard_from'=>$request->get('standard_from'),
                 'standard_to'=>$request->get('standard_to'),
                 'subjects'=>$request->get('subjects'),
                 'board_university'=>$board_university_name]);

                 $notification = array(
                    'message' => 'Details updated sucessfully you can add more details in next tab', 
                    'alert-type' => 'info'
                      );
        return redirect()->back()->with('notification',$notification);   
    
    }

    public function update_tab3($profile_id,Request $request){

        $facilities_infrastrcture = $request->get('facilities_infrastrcture');
        $facilities_infrastrcture_name = implode(",",$facilities_infrastrcture);

        \DB::table('profile_setups')
            ->where('id','=',$profile_id)
            ->update(['facilities_infrastrcture'=>$facilities_infrastrcture_name]);
            $notification = array(
                'message' => 'Facilities added sucessfully you can add more details in next tab', 
                'alert-type' => 'info'
                  );
            return redirect()->back()->with('notification',$notification);     
    
    }

    public function update_tab4($profile_id,Request $request){

        \DB::table('profile_setups')
        ->where('id','=',$profile_id)
        ->update(['website'=>$request->get('website'),
                 'facebook'=>$request->get('facebook'),
                 'linkedin'=>$request->get('linkedin'),
                 'google'=>$request->get('google'),
                 'twitter'=>$request->get('twitter'),
                 'instgram'=>$request->get('instgram'),
                 'youtube'=>$request->get('youtube')]);
                 
                 $notification = array(
                    'message' => 'Social media accounts added sucessfully if you want to change anything you can update.', 
                    'alert-type' => 'info'
                      );
        return redirect()->back()->with('notification',$notification);      
    
    }


    public function update_tab5($profile_id,Request $request){

      

        \DB::table('main_registraions')
        ->where('id','=',$profile_id)
        ->update(['mobileno'=>$request->get('mobileno'),
                 'landlineno'=>$request->get('landlineno'),
                 'state'=>$request->get('state'),
                 'email'=>$request->get('institute_email'),
                 'address'=>$request->get('address')]);
        
        \Db::table('users')
        ->where('email','=',$request->get('email'))
        ->update(['name'=>$request->get('name')]);
        
                 $notification = array(
                    'message' => 'Updated', 
                    'alert-type' => 'info'
                      );
        return redirect()->back()->with('notification',$notification);      
    
    }
}
