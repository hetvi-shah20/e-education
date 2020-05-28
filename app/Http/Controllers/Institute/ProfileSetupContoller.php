<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Profile_setup;

class ProfileSetupContoller extends Controller
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
       
        return view('institute.pages.dashboard.profilesetup',compact('user_details','profile_setup'));
    }
}
