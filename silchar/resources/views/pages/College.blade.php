<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/css/blogs/navBarItems.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
    <title>College</title>
</head>
<body>
    <x-navBar/>
    <center>
    <a id="link_to_navBar_button" title="click here for bookings" href="">  <h1 class="link_to_navBar_button  heading_portion"> COLLEGES </h1> </a>
    </center> 

    @foreach($datas as $d)
    <div class="division">
    <h2 class="blogName">  {{$d->heading}} </h2>
    <center>
    <div class="writing_and_image">
    <img class="image_blog" src="{{asset('uploadImages/blogHistoryImages/'.$d['picture'])}}" alt="load" class="blog_display_image">
    <div class="parTwo">
    <p class="writing_blog">  {{$d->blog}}  </p>
    <p class="writeName"> {{$d->name}} </p>
    </div>
    </div>
    </center>
    </div>
    @endforeach

</body>
</html>

<x-footer/>