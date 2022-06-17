<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\schooladmission;
use App\Models\collegeadmission;
use App\Models\doctor;
use App\Models\bookrestraunt;
use App\Models\doctorbooking;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Mail;

class bookingController extends Controller
{
    
    function bookSchooling(Request $request){
        $schooladmission = new schooladmission();
        $schooladmission->name = $request->name;
        $schooladmission->grade = $request->grade;
        $schooladmission->gender = $request->gender;
        $schooladmission->age = $request->age;
        $schooladmission->email = $request->email;
        $schooladmission->phone = $request->phone;
        $schooladmission->document = $request->documents;
        $schooladmission->school = $request->select_school_input;

        $pass = $request->password;
        $hashedPassword =  Hash::make($pass);
        $schooladmission->password = $hashedPassword;

          if($request->hasFile('documents')){
            $file = $request->documents;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploadImages\blogHistoryImages',$fileName);
            $schooladmission->document = $fileName;
        }
        
        Session::flash('message', "Student successfully registered soon you will get the date of Admission , Thank You");

        // send mail
        $data = ['name'=> $request->name ,'data'=>"Your booking confirmed : visit ". $request->select_school_input . "after 3 days with the DMC from admission"];
        $user['to'] = $request->email;
        Mail::send('mail',$data,function($messages) use($user){
            $messages->to( $user['to'] );
            $messages->subject('Thank you for your Application to Silchar ');
        }  );

        $schooladmission->save();
        return redirect('/school_booking');
    }


    function showSchoolDatabase(){
        $data = schooladmission::all();
        return  view('adminData.schoolDatabase',['items'=>$data]);
    }

    function deleteSchool($id){
        $items = schooladmission::find($id);
        $items->delete();
        return redirect()->back();
    }

    function showCollegeDatabase(){
        $data = collegeadmission::all();
        return view("adminData\collegeDatabase",['items'=>$data]);
    }
    function deleteCollege($id){
        $items = collegeadmission::find($id);
        $items->delete();
        return redirect()->back();
    }

    function bookCollege(Request $request){
        $collegeadmission = new collegeadmission();
        $collegeadmission->name = $request->name;
        $collegeadmission->grade = $request->grade;
        $collegeadmission->gender = $request->gender;
        $collegeadmission->age = $request->age;
        $collegeadmission->email = $request->email;
        $collegeadmission->phone = $request->phone;
        $collegeadmission->document = $request->documents;
        $collegeadmission->college = $request->select_school_input;

        $pass = $request->password;
        $hashedPassword =  Hash::make($pass);
        $collegeadmission->password = $hashedPassword;

          if($request->hasFile('documents')){
            $file = $request->documents;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploadImages\blogHistoryImages',$fileName);
            $collegeadmission->document = $fileName;
        }
        // send mail
        $data = ['name'=> $request->name ,'data'=>"Your booking confirmed : visit ". $request->select_school_input . "after 3 days with the DMC from admission"];
        $user['to'] = $request->email;
        Mail::send('mail',$data,function($messages) use($user){
             $messages->to( $user['to'] );
             $messages->subject('Thank you for your Application to Silchar ');
        }  );

        $collegeadmission->save();

        Session::flash('message', "Student successfully registered soon you will get the date of Admission , Thank You");
        return redirect('/college_booking');
    }

    function showDoctors(){
        $data = doctor::all();
        return view('book\bookDoctor',['datas'=>$data]);
    }


    function showEateryDatabase(){
        $restraunt = bookrestraunt::all();
        return view('adminData/foodDatabase',['data'=>$restraunt]);
    }

    function deleteEateryBooking($id){
        $data = bookrestraunt::find($id);
        $data->delete();
        return redirect()->back();
    }


}
