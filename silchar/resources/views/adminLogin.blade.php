<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Silchar</title>
    <link rel="stylesheet" href="{{asset('asset\css\adminLogin.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<body>
<form method ="post" action="/adminlogin">
@csrf
        <label id="nameLabel" for="name"> Name </label> <br>
        <input id="name" type="text" name="nameAdminLogin" placeholder ="Enter your name"   required/>  <br>
        <label id="passLabel" for="password">Password</label> <br>
        <input id="pass"  type="password" name="passwordAdminLogin" placeholder="Enter your Password"  required/> <br>
        <button name="submit" >login</button>
        <div class="loginmessage"></div>
</form>



</body>
</html>


