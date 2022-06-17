<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book School</title>
    <link rel="stylesheet" href="{{asset('asset/css/bookSchool_homepage.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>

<body>
    <section class="admission_form" >
    <h1 id="admission_form_heading"> <a id="link_admission_heading" href="/">SCHOOL REGISTRATION FORM </a></h1>
            <form action="/admission_school_form"  method="post">
@csrf
                <label for="name" id="label_name" >FULL NAME</label> 
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>

                <label for="selectbox" id="label_grade" >GRADE : </label>
                <select name="grade" id="selectbox" required> 
                    <option value="4" name ="4" class="select_class">class 5</option>
                    <option value="5" name ="5" class="select_class">class 6</option>
                    <option value="6" name ="6" class="select_class">class 7</option>
                    <option value="7" name ="7" class="select_class">class 8</option>
                    <option value="8" name ="8" class="select_class">class 8</option>
                </select>
                <br>
                <br>

                <label for="gender" id="label_gender" >Gender : </label>
                <select name="gender" id="gender" required>
                    <option value="male" class="selectgender">MALE</option>
                    <option value="female" class="selectgender">FEMALE</option>
                    <option value="others" class="selectgender">OTHERS</option>
                </select>

                <label for="age" id="label_age" >Age : </label>
                <input type="text" name="age" id="age" placeholder ="Enter Student's age" required >
                <br>
                <br>


                <label for="email" id="label_email" >Email : </label>
                <input type="email" name="email" id="email" placeholder ="Enter Email" required>

                <label for="phone" id="label_phone" >Phone : </label>
                <input type="text" name="phone" id="phone" placeholder ="Enter Your Phone Number" required>     
                <br>
                <br>

                <label for="documents" id="label_documents" >Government Document</label>
                <input type="file" name="documents" id="government_documents" required>

                <label for="select_school" id="label_school" >School : </label>
                <select name="select_school_input" id="select_school" required>
                    <option value="South Point High School" name value="South Point High School" class="select_school">South Point High School  </option>
                    <option value="Holy Cross" name="Holy Cross" class="select_school">Holy Cross</option>
                    <option value="Collegiate" name="Collegiate" class="select_school">Collegiate</option>
                </select>
                <br>
                <br>


                <label for="password" id="label_password" >Password</label>
                <input type="password" name="password" id="password" placeholder ="Enter Your password" required>
                <br>
                <br>
                <center> <button type="submit" id="button" >Register</button> </center>


             @if (Session::has('message'))
                 <div class="result_pass">{{ Session::get('message') }}</div>
            @endif

            </form>
    </section>

</body>
</html>
