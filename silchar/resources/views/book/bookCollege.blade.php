<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/css/bookSchool_homepage.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>

<body>
    <section class="admission_form" >
    <h1 id="admission_form_heading"> <a id="link_admission_heading" href="/">COLLEGE REGISTRATION FORM </a></h1>
            <form action="/admission_college_form"  method="post">
@csrf
                <label for="name" id="label_name" >FULL NAME</label> 
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>

                <label for="selectbox" id="label_grade" >STREAM : </label>
                <select name="grade" id="selectbox" required> 
                    <option value="4" name ="4" class="select_class">Science</option>
                    <option value="5" name ="5" class="select_class">ARTS</option>
                    <option value="6" name ="6" class="select_class">COMMERCE</option>

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

                <label for="select_school" id="label_school" >College : </label>
                <select name="select_school_input" id="select_school" required>
                    <option value="Ramanuj Gupta Junior College" name="Ramanuj Gupta Junior College" class="select_school">Ramanuj Gupta Junior College  </option>
                    <option value="Vivekanand Junior College" name="Vivekanand Junior College" class="select_school">Vivekanand Junior College</option>
                    <option value="Aaryan Junior College" name="Aaryan Junior College" class="select_school">Aaryan Junior College</option>
                    <option value="K.V. Tarapur" name="K.V. Tarapur" class="select_school">K.V. Tarapur</option>
                    <option value="Grucharan College Silchar" name="Grucharan College Silchar" class="select_school">Grucharan College Silchar</option>
                    <option value="Hemangini College Silchar" name="Hemangini College Silchar" class="select_school">Hemangini College Silchar</option>
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
