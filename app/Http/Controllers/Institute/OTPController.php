<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OtpRequest;
use Session;
use App\User;

class OTPController extends Controller
{
    public function index()
    {
        return view('institute.pages.authentication.otp');
    }

    

    
}
