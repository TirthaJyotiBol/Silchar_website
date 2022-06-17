<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\querie;
use App\Models\adminlogin;
use App\Models\doctor;

use function GuzzleHttp\Promise\all;

class dbController extends Controller
{
    // insertion for index page  query form 
    function Insert(Request $req){
        $querie = new querie();
        $querie->name = $req->name_index;
        $querie->email = $req->email_index;
        $querie->query = $req->query_index;
        $querie->feature = $req->feature_index;
        $querie->save();
        return view('index',['QueryPostedMessage'=>'Your Query has been taken into account']);
    }

    // shows query data to admin
    function showQueries(){
        $datas = querie::all();
        return view('adminData/adminQuery2',['queries'=>$datas]);
    }


     /* ADMIN LOGIN   : If the details are correct then it redirects to 
       Admin Dashboard where all the details 
       About different database are shown  */

    public function deleteQueries($id){
        $data = querie::find($id);
        $data->delete();
        return redirect('/adminlogin/query');
    }

    function show(Request $request){
        $data = adminlogin::all();
         foreach($data as $d)
        {
            if($d->name == $request->nameAdminLogin && $d->password == $request->passwordAdminLogin){
            return redirect ('/admindashboard');
            }
            else{
                return view('/adminlogin');
            }
       }
    }

    // function callapi(){
    //     $data =  Http::get("https://reqres.in/api/users?page=2");
    //     return $data;
    // }



    /*
        Doctor Booking add database
    */

    function addDoctor(Request $req){
        $doctor = new doctor();
        $doctor->name = $req->doctor_name;
        $doctor->username = $req->doctor_user_name;
        $doctor->phone = $req->doctor_phone;
        $doctor->address = $req->doctor_address;
        $doctor->experiance = $req->doctor_experiance;
        $doctor->specialist = $req->select_specialist;
      

        if($req->hasFile('doctor_image')){
            $file = $req->doctor_image;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploaddoctorimages',$fileName);
            $doctor->picture = $fileName;
        }
        $doctor->save();  
        return redirect()->back();
    }

    function showDoctorDatas(){
        $data  = doctor::all();
        return view('adminData/doctorDatabase',["items"=>$data]);
    }

    function deleteDoctorDatabase($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }


}

// This controller has model -> admin login and queries from index page