<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\bloghistory;
use App\Models\blogcity;
use App\Models\blogHospital;
use App\Models\blogCollege;
use App\Models\blogSchool;


class blogs extends Controller
{
      // History 
     function postHistoryBlog(Request $request){
            $blogHistory = new blogHistory;
            $blogHistory->heading = $request->heading_form;
            $blogHistory->blog = $request->description_form;
            $blogHistory->name = $request->name;

            if($request->hasFile('blog_pic')){
                $file = $request->blog_pic;
                $extension = $file->getClientOriginalExtension();
                $fileName = time().".".$extension;
                $file->move('uploadImages\blogHistoryImages',$fileName);
                $blogHistory->picture = $fileName;
            }

            $blogHistory->save();
            return redirect()->back()->with('status','Your Blog Has been added Syccessfully');
          }

      function showHistory(){
        $data = bloghistory::all();
        return view('pages/History',['datas'=>$data]);
      }

// City

      function postCityBlog(Request $request){
        $blogCity = new blogCity;
        $blogCity->heading = $request->heading_form;
        $blogCity->blog = $request->description_form;
        $blogCity->name = $request->name;

        if($request->hasFile('blog_pic')){
            $file = $request->blog_pic;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploadImages\blogHistoryImages',$fileName);
            $blogCity->picture = $fileName;
        }

        $blogCity->save();
        return redirect()->back()->with('status','Your Blog Has been added Syccessfully');
      }

      function showCity(){
        $data = blogCity::all();
        return view('pages/city',['datas'=>$data]);
      }


      // Hospitals
      function postHospitalBlog(Request $request){
        $blogHospital = new blogHospital;
        $blogHospital->heading = $request->heading_form;
        $blogHospital->blog = $request->description_form;
        $blogHospital->name = $request->name;

        if($request->hasFile('blog_pic')){
            $file = $request->blog_pic;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploadImages\blogHistoryImages',$fileName);
            $blogHospital->picture = $fileName;
        }

        $blogHospital->save();
        return redirect()->back()->with('status','Your Blog Has been added Syccessfully');
      }

      function showHospital(){
        $data = blogHospital::all();
        return view('pages/Hospital',['datas'=>$data]);
      }



      function postCollegeBlog(Request $request){
        $blogCollege = new blogCollege;
        $blogCollege->heading = $request->heading_form;
        $blogCollege->blog = $request->description_form;
        $blogCollege->name = $request->name;

        if($request->hasFile('blog_pic')){
            $file = $request->blog_pic;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploadImages\blogHistoryImages',$fileName);
            $blogCollege->picture = $fileName;
        }

        $blogCollege->save();
        return redirect()->back()->with('status','Your Blog Has been added Syccessfully');
      }

      function showCollege(){
        $data = blogCollege::all();
        return view('pages/College',['datas'=>$data]);
      }

      

      function postSchoolBlog(Request $request){
        $blogSchool = new blogSchool;
        $blogSchool->heading = $request->heading_form;
        $blogSchool->blog = $request->description_form;
        $blogSchool->name = $request->name;

        if($request->hasFile('blog_pic')){
            $file = $request->blog_pic;
            $extension = $file->getClientOriginalExtension();
            $fileName = time().".".$extension;
            $file->move('uploadImages\blogHistoryImages',$fileName);
            $blogSchool->picture = $fileName;
        }

        $blogSchool->save();
        return redirect()->back()->with('status','Your Blog Has been added Syccessfully');
      }

      function showSchool(){
        $data = blogSchool::all();
        return view('pages/School',['datas'=>$data]);
      }

   }


