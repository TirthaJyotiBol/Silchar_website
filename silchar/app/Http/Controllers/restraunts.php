<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addrestraunt;
use App\Models\restraunt;
use App\Models\bookrestraunt;
use Illuminate\Support\Facades\Mail;

class restraunts extends Controller
{
   function ownerLogin(Request $req){
       $userName = $req->name;
       $password = $req->password;
       $count = addrestraunt::where('res_id',$userName)->where('password',$password)->count();

       // at the add Dish I Gave the user ID using which I can Fetch all the details about  the Restraunt
       if($count>0) {
            return redirect()->to('addDish/'.$userName);
       }
       else{
            return redirect()->back()->with('message','Restraunt Not Registered');
       }

   }

   function showDishes($id){
        $count = restraunt::where('res_id',$id)->count();
        $resData = addrestraunt::where('res_id',$id)->get();
        if($count>0){
                $data = restraunt::where('res_id',$id)->get();
                return view("Restraunts/owners/AddDish",['items'=>$data]);
        }
        else{
            return view('Restraunts/owners/AddDish',['items'=>$resData])->with('noDishesMessage','No Dishes Exist You Need To Add Dish');
        }

   }

   function AddDishForm($id){
       $resData = addrestraunt::where('res_id',$id)->get();
       return view("Restraunts/owners/AddDishForm",['items'=>$resData]);
   }

   function deleteDish($id){
        $data = restraunt::find($id);
        $data->delete();
        return redirect()->back()->with('deleteMsg','Dish has been deleted ');
   }

   function UploadDish(Request $req){
    $restraunt = new restraunt();
    $restraunt->res_id = $req->res_id;
    $restraunt->res_name = $req->name;
    $restraunt->address = $req->address;
    $restraunt->dish = $req->dish;
    $restraunt->price = $req->price;
    $restraunt->category = $req->category;
    $restraunt->email = $req->email;
    $restraunt->phone = $req->phone;

    if($req->hasFile('picture')){
        $file = $req->picture;
        $extension = $file->getClientOriginalExtension();
        $fileName = time().".".$extension;
        $file->move('uploadImages\DishImages',$fileName);
        $restraunt->picture = $fileName;
    }
    $restraunt->save();
    return redirect()->back()->with('message','Data Added Successfully');
   }

   function AddRestraunt(Request $req){
        $AddRes = new addrestraunt();
        $count = addrestraunt::where('res_id',$req->user_id)->count();

        /* If the restraunt Id already Exists then we cannot add another restraunt */

        if($count>0){
            return redirect()->back()->with('cannotLoadMessage','Restraunt Already Exists Visit My Restraunt');
        }

        else{
            $AddRes->res_id = $req->user_id;
            $AddRes->password = $req->password;
            $AddRes->address = $req->address;
            $AddRes->category = $req->categories;
            $AddRes->res_name = $req->name;
            $AddRes->email = $req->email;
            $AddRes->phone = $req->phone;

            if($req->hasFile('image')){
                $file = $req->image;
                $extension = $file->getClientOriginalExtension();
                $fileName = time().".".$extension;
                $file->move('uploadImages\RestrauntImages',$fileName);
                $AddRes->picture = $fileName;
            }
    
            $AddRes->save();
            return redirect()->back()->with('restrauntAdded','Congratulations Your Restraunt has Been Successfully Added');
        }
   }

   function deleteRestraunt($id){
        $table1 = addrestraunt::where("res_id", $id)->delete();
        $table2 = restraunt::where("res_id", $id)->delete();

        return redirect('/restraunt')->with('restraunt_deleted_message','Your Restraunt Has Been Deleted');
   }

   function allRestraunts(){
       $restraunts = addrestraunt::all();
       return view("Restraunts\AllRestraunts",['data'=>$restraunts]);
   }

   function allRestraunts_index(){
       
       $data = addrestraunt::all()->unique('address');
       return view("Restraunts/index",['data'=>$data]);
   }

   function showByAddress($address){

    $addresses = addrestraunt::where('address','like','%'.$address.'%')->get();
    return view("Restraunts/showByAddresses",['add'=>$addresses]);
  
   }

   function searchRestraunts(Request $request){
       $searchItem = $request->search;
       $dataCount = addrestraunt::where('address','like','%'.$searchItem.'%')
                             ->orWhere('category','like','%'.$searchItem.'%')
                             ->orWhere('res_name','like','%'.$searchItem.'%')
                             ->orWhere('email','like','%'.$searchItem.'%')->count();     

       $data = addrestraunt::where('address','like','%'.$searchItem.'%')
                             ->orWhere('category','like','%'.$searchItem.'%')
                             ->orWhere('res_name','like','%'.$searchItem.'%')
                             ->orWhere('email','like','%'.$searchItem.'%')->get();   
                             
        if($dataCount > 0){
            return view('Restraunts\searchResults',['data'=>$data]);
        }
        return redirect('/restraunt')->with('notFoundMessage','Sorry Restraunt Doenot Exist Try Something New');
   }

   function bookrestrauntview($id){
       $dataCount = restraunt::where('res_id',$id)->count();
       if($dataCount==0){
            return redirect()->back();
       }
       $data = restraunt::where('res_id',$id)->get();
    return view("Restraunts\Users\BookRestrauntForm",['data'=>$data]);
   }

   
   function bookrestrauntview2($id){
       $dataCount = restraunt::where('res_id',$id)->count();
       if($dataCount==0){
            return redirect()->back();
       }
       $data = restraunt::where('res_id',$id)->get();
    return view("Restraunts\Users\BookRestrauntForm",['data'=>$data]);
   }



   function bookrestraunts(Request $req){
        $nam = $req->name;
        $phone = $req->phone;
        $email = $req->email;
        $count = $req->person_count;
        $date = $req->date;
        $time = $req->time;
        $restraunt = $req->restraunt;

        if($req->person_count > 10){
            return redirect()->back()->with('message','Maximum of 10 Persons are allowed');
        }

        // Instamojo Payment

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    // code change
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                        array("X-Api-Key:test_0a827462169cf58cf8a287eeb3d6957f",
                            "X-Auth-Token:test_9d559abf8e7be946b8b6e68075684df9"));
            $payload = Array(
                'purpose' => 'Booking',
                'amount' => '1500',
                'phone' => $req->phone,
                'buyer_name' => $req->name,
                'redirect_url' => '/redirection_instamojo',  // redirect to this function : code change
                'send_email' => true,
                'webhook' => $this->instamojo_redirect($nam,$phone,$email,$count,$date,$time,$restraunt),
                'send_sms' => true,
                'email' => $req->email,
                'allow_repeated_payments' => false
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch); 
            $response = json_decode($response);

            return redirect($response->payment_request->longurl);
   }

   function redirection_instamojo(){
        return redirect('/restraunt');
   }
   
   function instamojo_redirect($nam,$phone,$email,$count,$date,$time,$restraunt){
    
            $data = $_POST;
            $mac_provided = $data['mac'];  
            unset($data['mac']);  
            $ver = explode('.', phpversion());
            $major = (int) $ver[0];
            $minor = (int) $ver[1];
            if($major >= 5 and $minor >= 4){
                ksort($data, SORT_STRING | SORT_FLAG_CASE);
            }
            else{
                uksort($data, 'strcasecmp');
            }
            $mac_calculated = hash_hmac("sha1", implode("|", $data), "fd5a6c6d92bb47df828ac203a9e90203");
            if($mac_provided == $mac_calculated){
                if($data['status'] == "Credit"){
                    
                    $bookrestraunt = new bookrestraunt();
                    $bookrestraunt->name = $nam;
                    $bookrestraunt->phone = $phone;
                    $bookrestraunt->email = $email;
                    $bookrestraunt->count = $count;
                    $bookrestraunt->date = $date;
                    $bookrestraunt->time = $time;
                    $bookrestraunt->restraunt = $restraunt;
                
                      // send mail
                      $data = ['name'=> $nam ,'count'=>$count,'date'=>$date,'resname'=>$restraunt,'username'=>$email,'pass'=>$phone,'data'=>"Thank You for Your Booking"];
                      $user['to'] = $email;
                      Mail::send('mail_res',$data,function($messages) use($user){
                          $messages->to( $user['to'] );
                          $messages->subject('Booking Successful');
                      }  );
                    $bookrestraunt->save();
                    
                }
                else{
                    return redirect('/restraunt');
                }
            }
            else{
                echo "MAC mismatch";
            }
   }


}

// api key instamojo : test_85e9a850fc1bba1fa54388ebb5c
// token :  test_2c75c1beb776a84f261cf81ec39