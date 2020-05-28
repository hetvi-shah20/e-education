<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AllProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.pages.dashboard.allprofile')->with('user',$user);
    }
}
