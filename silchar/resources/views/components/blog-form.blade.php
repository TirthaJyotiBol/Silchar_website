<!-- Write Blog NavBar component -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
</head>
<style>
  .navBar_for_blogPages{
    display: flex;
    padding-top: 20px;
    padding-bottom: 30%;
    padding-left: 31%;
    background-color: rgba(5, 4, 4, 0.856);
}

a.links {
    margin-left: 36px;
    padding-top: 5px;
    text-decoration: none;
    color: whitesmoke;
    font-size: 24px;
}

a.links:hover{
    color: wheat;
}

h1.heading {
    margin-top: -6cm;
    color: yellow;
    text-align: center;
}
form {
    margin-left: 10cm;
    margin-top: 5cm;
    border: solid black 1px;
    padding: 25px;
    width: 16cm;
    height: 14cm;
}

input#heading_form {
    border: none;
    border-bottom: 1px solid black;
    margin-left: 24px;
    width: 7cm;
    text-align: center;
}

textarea#description-form {
    width: 16cm;
    height: 7cm;
    margin-top: 15px;
}

button#buttonBlogSubmit {
    width: 7cm;
    margin-left: 4cm;
    height: 42px;
    color: white;
    font-family: monospace;
    background: #ff1616;
    border: navajowhite;
    cursor: pointer;
}

button#buttonBlogSubmit:hover{
    background-color: red;
}

.footerHome {
    text-decoration: none;
    font-family: serif;
    color: black;
    font-weight: bold;
}

label#blogger {
    margin-right: 2px;
    margin-left: 51px;
}

input#name {
    border: none;
    border-bottom: solid 1px;
}

</style>
<body>
  

<div class="navBar_for_blogPages">
<a href="/writeBlog_History" class="links">History</a>
<a href="/writeBlog_city" class="links">City</a>
<a href="/writeBlog_school" class="links"> School </a>
<a href="/writeBlog_college" class="links">College</a>
<a href="/writeBlog_hospital" class="links">Hospitals</a>
</div>

<h1 class="heading"> {{$heading}} </h1>

</body>
</html>