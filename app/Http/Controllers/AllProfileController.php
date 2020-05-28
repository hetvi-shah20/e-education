<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AllProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.pages.dashboard.allprofile')->with('user',$user);
    }
}
