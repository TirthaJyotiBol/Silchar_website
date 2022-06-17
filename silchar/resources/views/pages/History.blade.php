<html>
<head>
<title> History </title>
<link rel="shortcut icon" href="{{asset('asset/img/favicon.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('asset/css/blogs/navBarItems.css')}}">
</head>

<body>
<x-navbar/>
<center> <h1 class="heading_portion"> HISTORY </h1>  </center> 

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

<x-footer/>
</body>
</html>