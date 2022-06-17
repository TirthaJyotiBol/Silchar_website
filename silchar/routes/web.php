<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbController;  
use App\Http\Controllers\blogs;          
use App\Http\Controllers\bookingController;
use App\Http\Controllers\restraunts;
use App\Models\restraunt;

// INDEX PAGE :   Link to navBar Pages
Route::view('/','index');
Route::view('/city','pages/city');
Route::view('/Education','pages/Education');
Route::view('/History','pages/History');
Route::view('/Travel','pages/Travel');
Route::view('/Hospitals','pages/Hospital');
Route::view('/Schools','pages/School');
Route::view('/Colleges','pages/College');
Route::view('/writeBlog_Home','blogs/writeBlog');
Route::view('/blogs','blogs/readBlogs');

// Write Blogs NavBar pages
Route::view('/writeBlog_History','blogs\historywrBlog');
Route::view('/writeBlog_city','blogs\citywBlog');
Route::view('/writeBlog_college','blogs\collegewrBlog');
Route::view('/writeBlog_hospital','blogs\hospitalwrBlog');
Route::view('/writeBlog_school','blogs\schoolwrBlog');


// Admin pages
Route::view('/adminlogin','adminLogin');
Route::view('/admindashboard','adminData/adminDashboard');


// Admin Differernt databases
Route::view('/adminlogin/schoolDatabase','adminData/schoolDatabase');
Route::view('/adminlogin/collegeDatabase','adminData/collegeDatabase');
Route::view('/adminlogin/hotelsDatabase','adminData/hotelsDatabase');
Route::view('/adminlogin/groceriesDatabase','adminData/groceriesDatabase');
Route::view('/adminlogin/travelDatabase','adminData/travelDatabase');
Route::view('/adminlogin/doctorDatabase','adminData/doctorDatabase');
Route::view('/adminlogin/foodDatabase','adminData/foodDatabase');
Route::view('adminlogin/addDoctor','adminData/addDoctor');


// Admin Show Databases
Route::get('/adminlogin/query',[dbController::class,'showQueries']);   
Route::get('/adminlogin/delete/{id}',[dbController::class,'deleteQueries']);         

Route::get('adminlogin/schoolDatabase',[bookingController::class,'showSchoolDatabase'] );
Route::get('/adminlogin/schoolDatabase/deleteSchool/{id}',[bookingController::class,'deleteSchool']); 


Route::get('adminlogin/collegeDatabase',[bookingController::class,'showCollegeDatabase'] );
Route::get('/adminlogin/collegeDatabase/deleteCollege/{id}',[bookingController::class,'deleteCollege']);

Route::get('adminlogin/foodDatabase',[bookingController::class,'showEateryDatabase']);
Route::get('/adminlogin/foodDatabase/delete/{id}',[bookingController::class,'deleteEateryBooking']);

//form submission Index 
Route::post('/',[dbController::class,'Insert']);
Route::post('/adminlogin',[dbController::class,'show']);    //-> post is the name of the form post


// Admin Doctor Add into Database
Route::post('/addDoctor_form',[dbController::class,'addDoctor']);
Route::get('adminlogin/doctorDatabase',[dbController::class ,'showDoctorDatas']);
Route::get('adminlogin/doctorDatabase_delete_doctor/{id}',[dbController::class,'deleteDoctorDatabase']);


/*   Blogs controller section  */ 

Route::post('/writeBlogHistory',[blogs::class,'postHistoryBlog']);
Route::get('/History',[blogs::class,'showHistory']);

Route::post('/writeBlog_city',[blogs::class,'postCityBlog']);
Route::get('/city',[blogs::class,'showCity']);

Route::post('/writeBlog_hospital',[blogs::class,'postHospitalBlog']);
Route::get('/Hospitals',[blogs::class,'showHospital']);

Route::post('/writeBlog_college',[blogs::class,'postCollegeBlog']);
Route::get('/Colleges',[blogs::class,'showCollege']);

Route::post('/writeBlog_school',[blogs::class,'postSchoolBlog']);
Route::get('/Schools',[blogs::class,'showSchool']);



/* Bookings  */

Route::view('/book','book/bookHome');

Route::view('/bookDoctor','book/bookDoctor');
Route::get('/bookDoctor',[bookingController::class,'showDoctors']);     /* Shows Doctor details to the doctor homepage  */

Route::view('/school_booking','book/bookSchool');
Route::post('/admission_school_form',[bookingController::class,'bookSchooling']);

Route::view('/college_booking','book/bookCollege');
Route::post('/admission_college_form',[bookingController::class,'bookCollege']);




// Restraunt :
Route::view('/restraunt','Restraunts/index');
Route::view('login_restraunt','Restraunts/owners/myRestrauntLogin');
Route::view('/add_restraunt','Restraunts/AddRestraunt');
Route::post('/owner_login',[restraunts::class,'ownerLogin']);
Route::post('/add_res',[restraunts::class,'AddRestraunt']);
Route::view('/addDishes','Restraunts/owners/AddDish');
Route::view('/addDishes/{id}','Restraunts/owners/AddDish');
Route::get('/addDish/{id}',[restraunts::class,'showDishes']);
Route::view('/addDishForm','Restraunts/owners/AddDishForm');
Route::get('addDish/addDishForm/{id}',[restraunts::class,'AddDishForm']);
Route::post('AddDishForm',[restraunts::class,'UploadDish']);
Route::get('addDish/delete/{id}',[restraunts::class,'deleteDish']);
Route::get('addDish/deleteRestraunt/{id}',[restraunts::class,'deleteRestraunt']);

Route::view('/showByAddresses','Restraunts/showByAddresses');

Route::view('/all_restraunt','Restraunts\AllRestraunts');
Route::get('/all_restraunt',[restraunts::class,'allRestraunts']);

Route::get('/restraunt',[restraunts::class,'allRestraunts_index']);
// Route::get('/restraunt',[restraunts::class,'DasColonyRestraunts']);

Route::get('/address/{address}',[restraunts::class,'showByAddress']);

Route::post('/searchRestraunt',[restraunts::class,'searchRestraunts']);
Route::view('/searchRestraunt','Restraunts\searchResults');
Route::get('/searchRestraunt',[restraunts::class,'allRestraunts']);

Route::view('/bookingform',"Restraunts\Users\BookRestrauntForm");
Route::get('book/{id}',[restraunts::class,'bookrestrauntview']);
Route::get('address/book/{id}',[restraunts::class,'bookrestrauntview2']);

Route::post('booking_restraunt_operation',[restraunts::class,'bookrestraunts']);
Route::get('address/book/mp1/instamojo_redirect',[restraunts::class,'instamojo_redirect']);
Route::get('redirection_instamojo',[restraunts::class,'redirection_instamojo']);


// trial page
// trial page
Route::view('/trial','trial');

