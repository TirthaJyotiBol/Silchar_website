<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silchar</title>
    <link rel="stylesheet" href="{{asset('asset/css/index.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<body>
<!--  NavBar component -->
<x-navBar/>  

<div class="cards">
    <x-cardsIndexPage
        name="BLOG" 
        button="WRITE" 
        desc="Click above to Write Blog for Silchar" 
        link="/writeBlog_Home" 
        image="{{asset('asset\img\writeBlog_silchar.png')}}"  
        />
    <x-cardsIndexPage 
       name="ADMIN" 
       button="LOGIN" 
       desc="Click above to Log in to the Admin Panel" 
       link="/adminlogin" 
       image="{{asset('asset/img/writeBlog.png')}}" 
        />
        <x-cardsIndexPage 
       name="USER" 
       button="LOGIN" 
       desc="Click above to Log in to the User Panel" 
       link="" 
       image="{{asset('asset/img/user.png')}}" 
        />
</div>


<section class="ThirdPart">
    <h2> CONTACT US </h2>
    <form action="/" method="post">
    @csrf
        <label id ="name">NAME</label>   
        <br>
        <input class="Input_form" type="text" placeholder = "Enter Your Name" name ="name_index" required/> 
        <br>
        <label id ="email">EMAIL</label>  
        <br>
        <input  class="Input_form" id="mail" type="text" placeholder=" Enter Your Email" name="email_index" required/> 
        <br>
        <label> QUERY </label>    
        <br>
        <input class="Input_form" type="text" placeholder ="Query" name="query_index" required/> 
        <br>
        <label> FEATURE </label>    
        <br>
        <input class="Input_form" type="text" placeholder ="Mention Any Feature you want us to include in the website" name="feature_index"> 
        <br>
        
        <button type="submit" class="submit_button" name="Index_query_submit_button">submit</button>
        
    </form>
</section>
<x-footer />
</body>
</html>
