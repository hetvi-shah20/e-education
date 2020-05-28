<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Main_Registration;
use App\Course;
use App\Profile_setup;
use App\Document;
use App\Fee;
use DB;
use Session;


class CourseController extends Controller
{
    public function index($id)
    {
       
        $user = Auth::user();
        $userid = $user->id;
        $user_details = Main_Registration::where('user_id','=',$userid)->get();
        $main_id = Main_Registration::where('user_id','=',$userid)->pluck('id')->first();
        $profile_setup = Profile_setup::where('main_id','=',$main_id)->get();
        $course_details = Course::where('id','=',$id)->get();
        $course_document = Document::where('course_id','=',$id)->get();
        $fees_details = Fee::where('course_id','=',$id)->get();
        
        return view ('institute.pages.dashboard.course',compact('user_details','course_details','profile_setup','course_document','fees_details'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $main_id = Main_Registration::where('user_id','=',$id)->pluck('id')->first();

        $course = new Course(array(
            'main_id'=> $main_id,
            'course_name'=>$request->get('course_name'),
            'standard'=>$request->get('standard'),
            'subject'=>$request->get('subject'),
            'description'=>$request->get('description'),
            'refrence_website'=>$request->get('refrence_website'),
            
        ));

        if(\Input::file('material') != "")
        {
             if( $pdf = \Input::file('material'))
                {
                    $pdfname =  $pdf->getClientOriginalName();
                    $pdf->move(base_path().'/public/course/pdf',$pdfname);
                    $course->material = $pdfname;

                   
                }
        }
        else{

        }

        if( $image = \Input::file('photo'))
        {
            $picname = str_random(30).'.'.$image->getClientOriginalExtension();
            $image->move(base_path().'/public/course/image',$picname);
            $course->photo = $picname;
        }
        $course->save();

        $course_id=$course->id;

        if(\Input::file('material') != "")
        {
            $document = new Document(array(

                'main_id'=>$main_id,
                'course_id'=>$course_id,
                'document'=>$pdfname,
            ));
            $document->save();
        }
        else{

        }

        $notification = array(
            'message' => 'Course added sucessfully', 
            'alert-type' => 'success'
              );


        return redirect()->back()->with('notification',$notification);
    }


    public function update($id,Request $request)
    {
       
        \DB::table('courses')
        ->where('id','=',$id)
        ->update(['course_name'=>$request->get('course_name'),
                    'standard'=>$request->get('standard'),
                    'subject'=>$request->get('subject'),
                    'description'=>$request->get('description'),
                    'refrence_website'=>$request->get('refrence_website')]);
                    
                    $notification = array(
                        'message' => 'Course updated sucessfully', 
                        'alert-type' => 'success'
                          );
        return redirect()->back()->with('notification',$notification);
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        $user = Auth::user();
        $id = $user->id;
        $user_details = Main_Registration::where('user_id','=',$id)->get();
        $main_id = Main_Registration::where('user_id','=',$id)->pluck('id')->first();
        $course = Course::where('main_id','=',$main_id)->get();

        $notification = array(
            'message' => 'Course deleted sucessfully', 
            'alert-type' => 'success'
              );

       // return view('institute.pages.dashboard.all_course',compact('user_details','course'))->with('notification',$notification);
              return \Redirect::route('instituteAllCourse',compact('user_details','course'))->with('notification',$notification);

    }


}
