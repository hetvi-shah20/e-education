<?php

namespace App\Http\Controllers\Institute;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Main_Registration;
use Auth;
use App\Document; 

class DocumentController extends Controller
{
    public function store($course_id,Request $request)
    {
     
        $user = Auth::user();
        $id = $user->id;
        $main_id = Main_Registration::where('user_id','=',$id)->pluck('id')->first();
        $document = new Document(array(
            'main_id'=>$main_id,
            'course_id'=>$course_id,
        ));
        if($pdf = \Input::file('document'))
        {
          
            $pdfname =  $pdf->getClientOriginalName();
            $pdf->move(base_path().'/public/course/pdf',$pdfname);
            $document->document = $pdfname;
        }

        $document->save();
        $notification = array(
            'message' => 'Document added sucessfully',
            'alert-type' => 'success'
              );
        return redirect()->back()->with('notification',$notification);
    }
}
