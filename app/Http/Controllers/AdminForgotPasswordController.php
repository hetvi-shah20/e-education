<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminForgotPasswordController extends Controller
{
    public function index()
    {
        return view('admin.pages.authentication.forgotpassword');
    }
}
