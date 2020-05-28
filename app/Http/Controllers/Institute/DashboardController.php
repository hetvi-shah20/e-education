<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile_setup;
use Session;
use Auth;
use App\Main_Registration;

class DashboardController extends Controller
{
    public function index()
    {
       $user = Auth::user();
       $id = $user->id;
       $user_details = Main_Registration::where('user_id','=',$id)->get();
       $main_id = Main_Registration::where('user_id','=',$id)->select('id')->pluck('id');

       \QrCode::size(500)
       ->format('png')
       ->generate(Auth::user()->name, public_path('images/qrcode.png'));
        $profile_details = Profile_setup::where('main_id','=',$main_id)->get();
        if(empty($profile_details))
        {
             return view('institute.pages.dashboard.dashboard',compact('user_details'));

        }else{
            return view('institute.pages.dashboard.dashboard',compact('user_details','profile_details'));
        }
        
    }

    public function store_tab1(Request $request){

        
        $user = Auth::user();
        $id = $user->id;
        $main_id = Main_Registration::where('user_id','=',$id)->pluck('id')->first();
        $mid = Session::get('mid');
      
        

        $store1 = new Profile_setup(array(

            'main_id'=>$main_id,
            'clg_name'=>$request->get('clg_name'),
            'year'=>$request->get('year'),
            'stream'=>$request->get('stream'),
            'type'=>$request->get('type'),
            'exprience'=>$request->get('exprience'),
            'jobprofile'=>$request->get('jobprofile'),
            'standard_from'=>'NONE',
            'standard_to'=>'NONE',
            'subjects'=>'NONE',
            'board_university'=>'NONE',
            'coaching_options'=>'NONE',
            'facilities_infrastrcture'=>'NONE',
            'website'=>'NONE',
            'facebook'=>'NONE',
            'linkedin'=>'NONE',
            'google'=>'NONE',
            'twitter'=>'NONE',
            'instgram'=>'NONE',
            'youtube'=>'NONE',
            'business_card'=>'NONE',

        ));

        $store1->save();
        $notification = array(
            'message' => 'profile setup sucessfully you can add more details in next tab', 
            'alert-type' => 'info'
              );
        return redirect()->back()->with('notification',$notification);

    }


    public function store_tab2(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $main_id = Main_Registration::where('user_id','=',$id)->select('id')->pluck('id');
        

        $board_university = $request->get('board_university');
     
        $board_university_name = implode(",",$board_university);
        

        // $coaching_options = $request->get('coaching_options');
        // $coaching_options_name = implode(",",$coaching_options);

        

        \DB::table('profile_setups')
            ->where('main_id','=',$main_id)
            ->update(['standard_from'=>$request->get('standard_from'),
                     'standard_to'=>$request->get('standard_to'),
                     'subjects'=>$request->get('subjects'),
                     'board_university'=>$board_university_name]);
                     $notification = array(
                        'message' => 'Details added sucessfully you can add more details in next tab', 
                        'alert-type' => 'info'
                          );
            return redirect()->back()->with('notification',$notification);     
        

    }

    public function store_tab3(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $main_id = Main_Registration::where('user_id','=',$id)->select('id')->pluck('id');

        $facilities_infrastrcture = $request->get('facilities_infrastrcture');
        $facilities_infrastrcture_name = implode(",",$facilities_infrastrcture);

        \DB::table('profile_setups')
            ->where('main_id','=',$main_id)
            ->update(['facilities_infrastrcture'=>$facilities_infrastrcture_name]);
            $notification = array(
                'message' => 'Facilities added sucessfully you can add more details in next tab', 
                'alert-type' => 'info'
                  );
            return redirect()->back()->with('notification',$notification);     
        

    }

    public function store_tab4(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $main_id = Main_Registration::where('user_id','=',$id)->select('id')->pluck('id');

        $files=\Input::file('file');
        $picName = str_random(30).'.'.$files->getClientOriginalExtension(); //Insert path in database
        $files->move(base_path().'/public/images/business_card/',$picName);     

        \DB::table('profile_setups')
        ->where('main_id','=',$main_id)
        ->update(['website'=>$request->get('website'),
                 'facebook'=>$request->get('facebook'),
                 'linkedin'=>$request->get('linkedin'),
                 'google'=>$request->get('google'),
                 'twitter'=>$request->get('twitter'),
                 'instgram'=>$request->get('instgram'),
                 'youtube'=>$request->get('youtube'),
                 'business_card'=>$picName]);
                 $notification = array(
                    'message' => 'Social media accounts added sucessfully if you want to change anything you can update.', 
                    'alert-type' => 'success'
                      );
        return redirect()->back()->with('notification',$notification);     
        

    }


   

}