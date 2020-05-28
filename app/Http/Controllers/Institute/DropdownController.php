<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DropdownController extends Controller
{
    public function index()
    {
            $states = DB::table("states")->pluck("name","id");
            return view('institute.pages.authentication.registration',compact('states'));
    }


    public function getCityList(Request $request)
    {
            $cities = DB::table("cities")
            ->where("state_id",$request->state_id)
            ->pluck("name","id");
            return response()->json($cities);
    }
}
