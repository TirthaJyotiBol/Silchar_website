<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write blog </title>
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('asset\css\blogs\writeBlogsIndex.css')}}">
    <link rel="stylesheet" href="{{asset('asset\css\blogs\writeBlogsIndex')}}" type="image/x-icon">



</head>
<body>
<x-navBar/>

<div class="heading">
<h1> CHOOSE THE FIELD WHERE YOU WANT TO WRITE BLOG </h1>
</div>

<div class="midPortion">
<a href="/writeBlog_History"> <button type="submit"> HISTORY  </button>  <br></a>
<a href="/writeBlog_city"> <button type="submit"> CITY     </button>  <br></a>
<a href="/writeBlog_school"> <button type="submit"> SCHOOL   </button>  <br></a>
<a href="/writeBlog_college"> <button type="submit"> COLLEGE  </button>  <br></a>
<a href="/writeBlog_hospital"> <button type="submit"> HOSPITALS </button>  <br></a>
</div>
<x-footer/>

</body>
</html>