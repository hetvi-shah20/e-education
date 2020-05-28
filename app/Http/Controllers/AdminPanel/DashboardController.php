<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Main_Registration;
use Charts;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
            $user = Auth::user();
            $id = $user->id;
            
            $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
            $chart = Charts::database($users, 'bar', 'highcharts')
                            ->title('User Details')
                            ->elementLabel('Total Registration')
                            ->dimensions(550, 400)
                            ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                            ->groupByMonth(date('Y'), true);
    
            $piechart = Charts::database($users, 'pie', 'highcharts')
                            ->title('User Details')
                            ->elementLabel('Total Registration')
                            ->dimensions(550, 400)
                            ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                            ->groupByMonth(date('Y'), true);
    
            $total_registration = count(User::where('role','=',2)->orWhere('role','=',4)->orWhere('role','=',5)->get());
            $count_institute_registration = count(User::where('role','=',2)->get());
            $count_pending_institute_registration = count(User::where('role','=',2)->where('status','=',0)->get());
    
            $count_school_registration = count(User::where('role','=',4)->get());
            $count_pending_school_registration = count(User::where('role','=',4)->where('status','=',0)->get());
    
            $count_collage_registration = count(User::where('role','=',5)->get());
            $count_pending_collage_registration = count(User::where('role','=',5)->where('status','=',0)->get());
          
           // return view('institute.pages.dashboard.test',['chart' => $chart,'chart2'=>$piechart]);
           return view('AdminPanel.pages.dashboard',['chart' => $chart,'piechart' => $piechart],compact('count_collage_registration','count_pending_collage_registration','count_school_registration','count_pending_school_registration','count_institute_registration','count_pending_institute_registration','total_registration'))->with('user',$user);
    }

    public function getinstitute()
    {
        $user = Auth::user();
        $id = $user->id;
        $registration = User::where('role','=',2)->get();
        return view('AdminPanel.pages.allInstituteprofile',compact('registration','user'));
    }

    public function getschool()
    {

        $user = Auth::user();
        $id = $user->id;
        $registration_school = User::where('role','=',4)->get();
        return view('AdminPanel.pages.school',compact('registration_school','user'));
    }

    public function getcontact()
    {

    }

    public function getenquiry()
    {
        
    }
}

