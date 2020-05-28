<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileDetailsController extends Controller
{
    public function index()
    {  
        $user = Auth::user();
        return view('admin.pages.dashboard.viewprofile')->with('user',$user);

    }
}
