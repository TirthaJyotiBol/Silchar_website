<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Restraunt</title>
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/addRestraunt.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<body>
    <div class="flex_doctor_add_form">

        <div class="first">
           <h1 id="heading_add_doctor" > <a href="/restraunt"> ADD RESTRAUNT SILCHAR </a> </h1> 
           
    
        </div>
        
        <hr>
    <form action="/add_res" method="post" enctype="multipart/form-data" >
        @csrf 
            <label for="doctor_name" id="label_doctor_name" >Restraunt Name</label> <br>
            <input type="text" name="name" id="doctor_name" placeholder="Enter Restraunt Name" required/>  <br><br>
    
            <label for="doctor_user_name" id="label_doctor_user_name" >User ID</label> <br>
            <input type="text" name="user_id" id="doctor_user_name" placeholder="Enter Unique Restraunt Username" required/>  <br><br>

            <label for="doctor_user_name" id="label_doctor_user_name" >Password</label> <br>
            <input type="password" name="password" id="doctor_user_name" placeholder="Create Password" required/>  <br><br>
    
            <label for="doctor_phone" id="label_doctor_phone" >Phone</label> <br>
            <input type="text" name="phone" id="doctor_phone" placeholder="Enter Phone Number" required/> <br><br>
    
            <label for="doctor_address">Address</label> <br>
            <textarea name="address" id="doctor_address" cols="69" rows="10" placeholder="Enter Address" required/></textarea> <br><br>
    
    
            <label for="doctor_experiance" id="label_doctor_experiance">Email</label> <br>
            <input type="email" name="email" id="doctor_experiance" placeholder="Enter Email " required/> <br><br>
    
            <label for="select_specialist" id="label_select_specialist">category</label> <br>
            <select name="categories" id="select_specialist" required/>
                <option name="Family Friendly"  value="Family Friendly">Family Friendly</option>
                <option name="Friends and Hangout"  value="Friends and Hangout">Friends and Hangout</option>
                <option name="Business Meetings"  value="Business Meetings">Business Meetings</option>
                <option name="Party"  value="Party">Party</option>
                <option name="Formal"  value="Formal">Formal</option>
                <option name="Casual"  value="Casual">Casual</option>
            </select> <br><br>
    
            <label for="doctor_image" id="doctor_image" > Picture </label> <br>
            <input type="file" name="image" id="doctor_image" required/> <br><br>
            <button type="submit" id="submit_button" >POST</button>

            @if (session()->has('cannotLoadMessage'))
                <div class="showFailureMessage">
                    {{session()->get('cannotLoadMessage');}}
                </div>
            @endif

            @if (session()->has('restrauntAdded'))
                <div class="showSuccessMessage">
                    {{session()->get('restrauntAdded');}}
                </div>
            @endif

        </form>

       

</body>
</html>
