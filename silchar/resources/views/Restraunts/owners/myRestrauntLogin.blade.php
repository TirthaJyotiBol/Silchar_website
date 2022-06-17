<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('asset\css\adminLogin.css')}}">
</head>
<body>
    <form method ="post" action="/owner_login">
        @csrf
                <label id="nameLabel" for="name"> UserId </label> <br>
                <input id="name" type="text" name="name" placeholder ="Enter Restraunt User Id"   required/>  <br>
                <label id="passLabel" for="password">Password</label> <br>
                <input id="pass"  type="password" name="password" placeholder="Enter your Password"  required/> <br>
                <button name="submit">LOGIN</button>

                @if (session()->has('message'))
                <div class="loginmessage">
                    {{session()->get('message');}}   
                </div>                 
                @endif
                
        </form>
</body>
</html>