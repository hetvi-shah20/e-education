<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileDetailsController extends Controller
{
    public function index()
    {  
        $user = Auth::user();
        return view('AdminPanel.pages.adminprofile')->with('user',$user);
    }
}
