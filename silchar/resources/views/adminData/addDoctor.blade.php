<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="{{asset('asset/css/admin/addDoctor.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<body>

<div class="flex_doctor_add_form">

    <div class="first">
       <h1 id="heading_add_doctor" > <a href="/admindashboard"> ADD DOCTOR SILCHAR </a> </h1> 
       

    </div>
    
    <hr>

    <form action="/addDoctor_form" method="post" enctype="multipart/form-data" >
    @csrf 
        <label for="doctor_name" id="label_doctor_name" >Name</label> <br>
        <input type="text" name="doctor_name" id="doctor_name" placeholder="Enter Doctor Name" required/>  <br><br>

        <label for="doctor_user_name" id="label_doctor_user_name" >User Name</label> <br>
        <input type="text" name="doctor_user_name" id="doctor_user_name" placeholder="Enter Unique Username" required/>  <br><br>

        <label for="doctor_phone" id="label_doctor_phone" >Phone</label> <br>
        <input type="text" name="doctor_phone" id="doctor_phone" placeholder="Enter Phone Number" required/> <br><br>

        <label for="doctor_address">Clinic Address</label> <br>
        <textarea name="doctor_address" id="doctor_address" cols="69" rows="10" placeholder="Enter Address" required/></textarea> <br><br>


        <label for="doctor_experiance" id="label_doctor_experiance">Experiance</label> <br>
        <input type="text" name="doctor_experiance" id="doctor_experiance" placeholder="Enter Experiance" required/> <br><br>

        <label for="select_specialist" id="label_select_specialist">Choose Speciality</label> <br>
        <select name="select_specialist" id="select_specialist" required/>
            <option value="Allergies" name="Allergies" id="Allergies" >Allergies</option>
            <option value="Cold and Flu" name="Cold and Flu" id="Cold and Flu">Cold and Flu</option>
            <option value="diarreah" name="diarreah" id="diarreah" >Diarreah</option>
            <option value="Child Specialst" name="Child Specialst" id="Child Specialst" >Child Specialst</option>
            <option value="Homeopathy" name="Homeopathy" id="Homeopathy" >Homeopathy</option>
        </select> <br><br>

        <label for="doctor_image" id="doctor_image" > Picture </label> <br>
        <input type="file" name="doctor_image" id="doctor_image" required/> <br><br>


        <button type="submit" id="submit_button" >POST</button>

    
    </form>
    
</div>  

</body>
</html>