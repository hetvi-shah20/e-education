<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;

class TimetableController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        return view('institute.pages.dashboard.timetable',compact('user_details'));
    }
}
