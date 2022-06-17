<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Dishes</title>
    <link rel="stylesheet" href="{{asset('asset/css/Restraunts/addDishForm.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<body>

<div class="flex_doctor_add_form">
    <div class="first">
       <h1 id="heading_add_doctor" > <a href="/restraunt"> RESTRAUNT SILCHAR </a> </h1>    
    </div>
    <hr>   
    <form action="/AddDishForm" method="post" enctype="multipart/form-data" >
    @csrf 
        <label for="doctor_name" id="label_doctor_name" >Restraunt Name</label> <br>
        @foreach ($items as $item)
        <input class="light" type="text" name="name" id="doctor_name" value="{{$item->res_name}}" placeholder="Enter Restraunt Name" readonly/>  <br><br>

        <label for="doctor_user_name" id="label_doctor_user_name" >Restraunt ID</label> <br>
        
        <input class="light" type="text" name="res_id" id="doctor_user_name" value="{{$item->res_id}}" readonly/>  <br><br>
        

        <label for="doctor_user_name" id="label_doctor_user_name" >Dish Name</label> <br>
        <input type="text" name="dish" id="doctor_user_name" placeholder="Enter Dish Name" required/>  <br><br>


        <label for="doctor_experiance" id="label_doctor_experiance">Address</label> <br>
        <input class="light" type="text" name="address" id="doctor_experiance" value="{{$item->address}}" readonly/> <br><br>

        <label for="doctor_experiance" id="label_doctor_experiance">Price</label> <br>
        <input type="text" name="price" id="doctor_experiance" placeholder="Enter the Price" required/> <br><br>

        <label for="doctor_experiance" id="label_doctor_experiance">Category</label> <br>
        <input type="text" name="category" id="doctor_experiance" value="{{$item->category}}" readonly/> <br><br>

        <label for="doctor_experiance" id="label_doctor_experiance">Email</label> <br>
        <input class="light" type="text" name="email" id="doctor_experiance" value="{{$item->email}}" readonly/> <br><br>

        <label for="doctor_experiance" id="label_doctor_experiance">Phone</label> <br>
        <input class="light" type="text" name="phone" id="doctor_experiance" value="{{$item->phone}}" readonly/> <br><br>

        <label for="doctor_image" id="doctor_image" > Dish Picture </label> <br>
        <input type="file" name="picture" id="doctor_image" required/> <br><br>


        @endforeach
        <button type="submit" id="submit_button" >ADD DISH</button>
        @if(session()->has('message'))
        <h2 id="success" >{{session()->get('message')}}</h2>
        @endif

       
        
    
    </form>
    
</div>  

</body>
</html>>