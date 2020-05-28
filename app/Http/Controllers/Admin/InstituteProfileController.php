<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Main_Registration;
use App\State;
use App\Service;  
use App\Profile_setup;  
use DB;

class InstituteProfileController extends Controller
{
    public function index($id)
    {
        $user = Auth::user();
        $profile_details = DB::table('users')
            ->join('main_registraions', 'users.id', '=', 'main_registraions.user_id')
            ->where('users.id','=',$id)
            ->select('users.*','main_registraions.*')
            ->get();
        foreach($profile_details as $main_registration)
        {
            $main_id = $main_registration->id;
        }
        $emailid = Main_Registration::where('user_id','=',$id)->pluck('email')->first();
        foreach($profile_details as $state_name)
        {
            $state_id = $state_name->state;
        } 
        $name = state::where('id','=',$state_id)->pluck('name')->first();
        $services = Service::where('user_id','=',$id)->get();
        $status = User::where('id','=',$id)->pluck('status')->first();
        $profile_setup = Profile_setup::where('main_id','=',$main_id)->get();
        return view('admin.pages.dashboard.viewprofile',compact('profile_setup','emailid','status','id','user','profile_details','name','services'));
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}